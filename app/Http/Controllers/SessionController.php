<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function register(){
        return view("registration");
    }
    public function store(Request $request){
        $validated = $request->validate([]);
        User::create($validated);
        return redirect()->route("profile");
    }

    public function reqlogin(){
        return view("login");
    }
    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        try{
            User::findOrFail($validated);
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        $request->session()->regenerate();

        return redirect()->route("profile");
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        return redirect()->route("home");
    }

}
