<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function index(){
        return view("forgortpassword.index");
    }
    public function emailresetlink(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT ? redirect()->back()->with(['status' => __($status)]) : back()->withErrors(['errors' => __($status)]);
    }
}
