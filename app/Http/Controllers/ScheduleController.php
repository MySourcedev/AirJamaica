<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $ids = Schedule::all();
        return view("",compact("ids"));
    }
    public function create(){
        return view("");
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        Schedule::create($validated);
        return redirect()->route("")->with("success","");
    }
    public function show(Schedule $schedule){
        return view("",compact("schedule"));
    }
    public function edit(Schedule $schedule){
        return view("",compact("schedule"));
    }
    public function update(Request $request, Schedule $schedule){
        $validated = $request->validate([]);
        $schedule->update($validated);
        return redirect()->route("")->with("success","");
    }
    public function destroy(Schedule $schedule){
        $schedule->delete();
        return redirect()->route("")->with("success","");
    }
}
