<?php

namespace App\Http\Controllers;

use App\Models\LeaveOfAbsence;
use Illuminate\Http\Request;

class LeaveOfAbsenceController extends Controller
{
    public function index(){
        $ids = LeaveOfAbsence::all();
        return view("admin.leaveofabsence.index",compact("ids"));
    }
    public function create(){
        return view("profile.leaveofabsence");
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        LeaveOfAbsence::create($validated);
        return redirect()->route("profile.leaveofabsence")->with("success","");
    }
    public function show(LeaveOfAbsence $leave_of_absence){
        return view("admin.leaveofabsence.show",compact("leave_of_absence"));
    }
}
