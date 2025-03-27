<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Bids;

class BidsController extends Controller
{
    public function index(){
        $ids = Bids::all();
        return view("",compact("ids"));
    }
    public function create(Bids $bids){
        return view("",compact("bids"));
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        Bids::create($validated);
        return redirect()->route("")->with("success","");
    }
    public function show(Bids $bids){
        return view("",compact("bids"));
    }
    public function edit(Bids $bids){
        return view("",compact("bids"));
    }
    public function update(Request $request,Bids $bids){
        $validated = $request->validate([]);
        $bids->update($validated);
        return redirect()->route("")->with("success","");
    }
    public function destroy(Bids $bids){
        $bids->delete();
        return redirect()->route("")->with("success","");
    }
}
