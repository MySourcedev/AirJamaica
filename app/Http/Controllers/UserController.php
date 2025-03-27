<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request){
        dd($request->all());
        // $validated = request()->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:8',
        //     'f_name' => 'required|min:3',
        //     'l_name' => 'required|min:3',
        //     'confirm_password' => 'required|min:8|same:password',
        //     'VATSIM_ID'=> 'required',
        //     'airline' => 'required',
        //     'hub' => 'required',
        //     'terms' => 'accepted'
        // ]);

        // try{
        //     $user = User::create($validated);
        // }catch(\Exception $e){
        //     return redirect()->back()->with('error', $e->getMessage());
        // }
        // return redirect()->route("profile/{$user->id}");
    }
    public function edit(User $user){
        return view("editprofile",compact("user"));
    }
    public function resetPasswordReq(){
        return view("changepassword");
    }
    public function resetPassword(){
        $validated = request()->validate([
            'password' => 'required|min:8'
        ]);
        User::where('email','=', $validated['email'])->update(['password'=> $validated['password']]);
        return redirect()->route("login");
    }
    public function update(Request $request, User $user){
        $validated = $request->validate([
            'email'=> 'email|nullable',
            'password' => 'nullable|min:8',
            'f_name'=> 'nullable|min:3',
            'l_name'=> 'nullable|min:3',
            'location' =>'nullable',
            'avatar' => 'nullable',
            'airline'=> 'nullable'
        ]);
        $user->update($validated);

        return redirect()->route("/profile/{$user->id}");
    }

    public function delete(User $user){
        try{
            $user->delete();
        }catch(\Exception $e){
            return redirect()->back()->with("error", $e->getMessage());
        }
        return redirect()->back()->with("success","You have successfully deleted this user");
    }
}
