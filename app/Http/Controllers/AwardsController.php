<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{

    public function index()
    {
        $awards = Awards::orderBy("created_at","desc")->paginate(10);
        return view("admin.awards.index", compact("awards"));
    }
    public function create(){
        return view("admin.awards.edit-create");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([]);
        $awards = Awards::create($validated);
        return redirect()->route("admin.awards.index")->with("success","");
    }
    public function edit(Awards $awards){
        return view("admin.awards.edit-create", compact("awards"));
    }
    public function update(Request $request, Awards $awards)
    {
        $validated = $request->validate([]);
        $awards->update($validated);
        return redirect()->route("admin.awards.index")->with("success","");
    }
    public function destroy(Awards $awards)
    {
        $awards->delete();
        return redirect()->route("admin.awards.index")->with("success","");
    }
}
