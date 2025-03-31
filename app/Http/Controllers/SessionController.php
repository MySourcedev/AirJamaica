<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function reqlogin(){
        return view("auth.login");
    }
    public function login(Request $request){    
        $validated = $request->validate([
            'VATSIM_ID_Email' => 'required|string',
            'password' => 'required|string',
        ]);
        
        try {
            $field = filter_var($validated['VATSIM_ID_Email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'VATSIM_ID';
            
            if (Auth::attempt([$field => $validated['VATSIM_ID_Email'], 'password' => $validated['password']])) {
                $request->session()->regenerate();
                return redirect()->route("profile", ["user"=> Auth::user()->id]);
            }
            return back()->withErrors(['auth' => 'Invalid credentials'])->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        return redirect()->route("home");
    }
}
