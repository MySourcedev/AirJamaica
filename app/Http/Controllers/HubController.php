<?php

namespace App\Http\Controllers;

use App\Models\Hubs;
use Illuminate\Http\Request;

class HubController extends Controller
{
    public function index(){
        $ids = Hubs::all();
        return view("",compact("ids"));
    }
    public function create(){
        return view("");
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        Hubs::create($validated);
        return redirect()->route("")->with("success","");
    }
    public function show(Hubs $hubs){
        return view("",compact("hub"));
    }
    public function edit(Hubs $hubs){
        return view("",compact("hubs"));
    }
    public function update(Request $request,Hubs $hubs){
        $validated = $request->validate([]);
        $hubs->update($validated);
        return redirect()->route("")->with("success","");
    }
    public function destroy(Hubs $hubs){
        $hubs->delete();
        return redirect()->route("")->with("success","");
    }
}
