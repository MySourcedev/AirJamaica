<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function isLoggedIn(){
        return Auth::check();
    }
    public function isAdmin(User $user){
        return $user->role == "Admin";
    }
}
