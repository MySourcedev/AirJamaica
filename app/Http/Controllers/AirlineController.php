<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    // Index - List all airlines
    public function index()
    {
        $airlines = Airline::paginate(10);
        return view('airlines.index', compact('airlines'));
    }

    // Show create form
    public function create()
    {
        return view('airlines.edit-create');
    }

    // Store new airline
    public function store(Request $request)
    {
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $validated = $request->validate([
            'ICAO_code' => 'required|string|max:4|unique:airlines',
            'IATA_code' => 'nullable|string|max:3',
            'name' => 'required|string|max:100',
            'callsign' => 'required|string|max:50',
            'country' => 'required|string|max:50'
        ]);

        Airline::create($validated);

        return redirect()->route('airlines.index')
                       ->with('success', 'Airline created successfully');
    }

    // Show edit form
    public function edit(Airline $airline)
    {
        return view('airlines.edit-create', compact('airline'));
    }

    // Update airline
    public function update(Request $request, Airline $airline)
    {
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $validated = $request->validate([
            'ICAO_code' => 'required|string|max:4|unique:airlines,ICAO_code,'.$airline->id,
            'IATA_code' => 'nullable|string|max:3',
            'name' => 'required|string|max:100',
            'callsign' => 'required|string|max:50',
            'country' => 'required|string|max:50'
        ]);

        $airline->update($validated);

        return redirect()->route('airlines.index')
                       ->with('success', 'Airline updated successfully');
    }

    // Delete airline
    public function destroy(Airline $airline)
    {
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $airline->delete();
        return redirect()->route('airlines.index')
                       ->with('success', 'Airline deleted successfully');
    }
}