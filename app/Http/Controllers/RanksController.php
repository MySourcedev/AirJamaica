<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranks;

class RanksController extends Controller
{
    public function index(){
        $ranks = Ranks::paginate(20);
        return view("admin.ranks.index",compact("ranks"));
    }
    public function create(){
        return view("admin.ranks.edit-create");
    }
    public function store(Request $request){
        $validated = $request->validate([

        ]);
        Ranks::create($validated);
        return redirect()->route("admin.ranks.index")->with("success","");
    }
    public function update(Ranks $rank, Request $request){
        $validated = $request->validate([]);
        $rank->update($validated);
        return redirect()->route("admin.ranks.index")->with("success","");
    }
    public function delete(Ranks $rank){
        $rank->delete();
        return redirect()->route("admin.ranks.index")->with("success","");
    }
}
