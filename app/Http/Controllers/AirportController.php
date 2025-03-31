<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    // Index - List all airports
    public function index()
    {
        $airports = Airport::paginate(10);
        return view('airports.index', compact('airports'));
    }

    // Show create form
    public function create()
    {
        return view('airports.edit-create');
    }

    // Store new airport
    public function store(Request $request)
    {
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $validated = $request->validate([
            'ICAO_code' => 'required|string|max:4|unique:airports',
            'IATA_code' => 'nullable|string|max:3',
            'name' => 'required|string|max:100',
            'city' => 'required|string|max:50',
            'country' => 'required|string|max:50',
            'runways' => 'required|numeric'
        ]);

        Airport::create($validated);

        return redirect()->route('airports.index')
                       ->with('success', 'Airport created successfully');
    }

    // Show edit form
    public function edit(Airport $airport)
    {
        return view('airports.edit-create', compact('airport'));
    }

    // Update airport
    public function update(Request $request, Airport $airport)
    {
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $validated = $request->validate([
            'ICAO_code' => 'required|string|max:4|unique:airports,ICAO_code,'.$airport->id,
            'IATA_code' => 'nullable|string|max:3',
            'name' => 'required|string|max:100',
            'city' => 'required|string|max:50',
            'country' => 'required|string|max:50',
            'runways' => 'required|numeric',
        ]);

        $airport->update($validated);

        return redirect()->route('airports.index')
                       ->with('success', 'Airport updated successfully');
    }

    // Delete airport
    public function destroy(Airport $airport)
    {
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $airport->delete();
        return redirect()->route('airports.index')
                       ->with('success', 'Airport deleted successfully');
    }
}