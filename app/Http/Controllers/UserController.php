<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Exception;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin.users",compact("users"));
    }
    public function create(){
        return view("auth.registration");
    }
    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'f_name' => 'required',
            'l_name' => 'required',
            'confirm_password' => 'required',
            'VATSIM_ID'=> 'required',
            'airline' => 'required',
            'hub' => 'required',
            'location' => 'required',
            'terms' => 'accepted'
        ]);
        try{
            unset($validated['terms']);
            User::create($validated);
        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        return redirect()->route("reqlogin");
    }

    public function show(User $user){
        return view("profile.index",compact("user"));
    }
    public function edit(User $user){
        return view("profile.edit",compact("user"));
    }
    public function changepassword(){
        return view("profile.changepassword");
    }
    public function change(Request $request){
        $validated = $request->validate([
            'password' => 'required|min:8|different:old_password',
            'confirm_password' => 'required|min:8|same:password',
            'old_password' => ['required', new MatchOldPassword]
        ]);
        unset($validated['old_password'],$validated['confirm_password']);
        try{
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($validated['password']);
            $user->save();
        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        return redirect()->route("profile")->with('success','You have successfully changed your password');
    }    
    public function update(Request $request, User $user){

        $validated = $request->validate([
            'email'=> 'email|nullable',
            'location' =>'nullable',
            'Avatar' => 'nullable|file|mimes:jpg,png,jpeg,gif,webp|max:10240',
            'Background' => 'nullable|file|mimes:jpg,png,jpeg,gif,webp|max:10240',
            'VATSIM_ID'=> 'nullable',
            'airline'=> 'nullable'
        ]);
        
        foreach(["Avatar","Background"] as $image){
            if($request->hasFile($image) ){
                $store = $request->file($image);
                $filename = time()."_".$user->f_name.$user->l_name.strtolower($image).".".$store->getClientOriginalExtension();
    
                $path = $store->storeAs('images/'.strtolower($image), $filename,'public');
                $validated[$image] = $path;
            }
        }
        $user->update($validated);
        return redirect('/profile/' . Auth::id());
    }

    public function delete(User $user){
        try{
            $user->delete();
        }catch(Exception $e){
            return redirect()->back()->with("error", $e->getMessage());
        }
        return redirect()->back()->with("success","You have successfully deleted this user");
    }
}
