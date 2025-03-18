<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(){
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'confirm_password' => 'required|min:8|same:password'
        ]);
        $user = User::create($validated);
    }
}
