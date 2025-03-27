<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index(){
        return view("");
    }
    public function store(Request $request){
        $validated  = $request->validate([
            'user_id' => '',
            "flight_number" => "",
            "dpt_time" => "",
            "arr_time" => "",
            "fuel_lbs" => "",
            "flight_route" => "",
            "aircraft" => "",
            "from" => "",
            "to" => ""
        ]);
        Flights::create($validated);
        return response()->json(["success" => "The flight creation was successfull"], 200);
    }
    public function show(Flights $flight){
        return view("",compact("flight"));
    }
    public function edit(Flights $flight) {
        return view("", compact("flight"));
    }
    public function update(Request $request, Flights $flight){
        $validated = $request->validate([
            "flight_number"=> "nullable",
            "dpt_time"=> "nullable",
            "arr_time" => 'nullable',
            "fuel_lbs" => 'nullable',
            "flight_route" => 'nullable',
            "aircraft" => 'nullable',
            "from" => "nullable",
            "to" => 'nullable'
        ]);
        $flight->update($validated);
        return response()->json(["success" => "The flight update was successful"],200);
    }
    public function destroy(Flights $flight){
        $flight->delete();
        return response()->json(["success" => "the flight was successfully deleted"], 200);
    }

}
