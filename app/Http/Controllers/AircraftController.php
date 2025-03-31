<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aircraft;
use Exception;

class AircraftController extends Controller
{
    public function index(){
        $aircrafts = Aircraft::paginate(10);
        return view("aircraft.index",compact("aircrafts"));
    }
    public function create(){
        return view("aircraft.create");
    }
    public function store(Request $request){
        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error', $e->getMessage());
        }
        $validated = $request->validate([
            'ICAO_code' => 'required|string|max:10|unique:aircraft',
            'model' => 'required|string|max:100',
            'registration' => 'required|string|max:20|unique:aircraft',
            'max_pax' => 'required|integer|min:1',
            'max_cargo' => 'required|integer|min:0'
        ]);

        Aircraft::create($validated);
        return redirect()->route("aircraft.index")->with("success","");
    }
    public function edit(Aircraft $aircraft){
        return view("aircraft.edit", ["aircraft"=> $aircraft]);
    }
    public function update(Request $request, Aircraft $aircraft){

        try{
            $this->authorize("isAdmin", User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error',$e->getMessage());
        }
        $validated = $request->validate([
            'ICAO_code' => 'required|string|max:10|unique:aircraft',
            'model' => 'required|string|max:100',
            'registration' => 'required|string|max:20|unique:aircraft',
            'max_pax' => 'required|integer|min:1',
            'max_cargo' => 'required|integer|min:0'
        ]);
        $aircraft->update($validated);
        return redirect()->route("aircraft.index")->with("success","You have successfully updated the aircraft");
    }
    public function destroy(Aircraft $aircraft){
        try{
            $this->authorize('isAdmin', User::class);
        }catch(Exception $e){
            return redirect()->route('profile')->with('error',$e->getMessage());
        }
        $aircraft->delete();
        return redirect()->route("aircraft.index")->with("success","You have successfully deleted the aircraft");
    }
}
