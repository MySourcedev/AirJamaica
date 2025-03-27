<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        $ids = Mail::all();
        return view("",compact("ids"));
    }
    public function create(){
        return view("");
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        Mail::create($validated);
        return redirect()->route("")->with("success","");
    }
    public function show(Mail $mail){
        return view("",compact("mail"));
    }
    public function edit(Mail $mail){
        return view("", compact("mail"));
    }
    public function update(Request $request, Mail $mail){
        $validated = $request->validate([]);
        $mail->update($validated);
        return redirect()->route("")->with("success","");
    }
    public function destroy(Mail $mail){
        $mail->delete();
        return redirect()->route("")->with("success","");
    }
}
