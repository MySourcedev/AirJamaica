<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Aircraft;

class AircraftController extends Controller
{
    public function index(){
        $aircraft = Aircraft::all();
        return view("");
    }
    public function create(){
        return view("");
    }
    public function store(Request $request){
        $validated = $request->validate([
            ""=> "required",
        ]);
        $aircraft = Aircraft::create($validated);
        return redirect("")->route()->with("success","");
    }
    public function show(Aircraft $aircraft){
        return view("", ["aircraft"=> $aircraft]);
    }
    public function edit(Aircraft $aircraft){
        return view("", ["aircraft"=> $aircraft]);
    }
    public function update(Request $request, Aircraft $aircraft){
        $validated = $request->validate([]);
        $aircraft->update($validated);
        return redirect("")->route()->with("success","");
    }
    public function destroy(Aircraft $aircraft){
        $aircraft->delete();
        return redirect("")->route()->with("success","");
    }
}
