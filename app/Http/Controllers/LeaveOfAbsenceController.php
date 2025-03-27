<?php

namespace App\Http\Controllers;

use App\Models\LeaveOfAbsence;
use Illuminate\Http\Request;

class LeaveOfAbsenceController extends Controller
{
    public function index(){
        $ids = LeaveOfAbsence::all();
        return view("",compact("ids"));
    }
    public function create(){
        return view("");
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        LeaveOfAbsence::create($validated);
        return redirect()->route("")->with("success","");
    }
    public function show(LeaveOfAbsence $leave_of_absence){
        return view("",compact("leave_of_absence"));
    }
    public function edit(LeaveOfAbsence $leave_of_absence){
        return view("", compact("leave_of_absence"));
    }
    public function update(Request $request, LeaveOfAbsence $leave_of_absence){
        $validated = $request->validate([]);
        $leave_of_absence->update($validated);
        return redirect()->route("")->with("success","");
    }
    public function destroy(LeaveOfAbsence $leave_of_absence){
        $leave_of_absence->delete();
        return redirect()->route("")->with("success","");
    }
}
