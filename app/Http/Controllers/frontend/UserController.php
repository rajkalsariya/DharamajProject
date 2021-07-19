<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //User Logout Method
    public function userLogout(){
        $userID = Auth::user()->id;
        Auth::logout($userID);
        return Redirect()->route('login');
    }

    // User Profile Show 
    public function userProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('layouts.profile.user_profile', compact('user'));
    }

    // User Profile update method
    public function profileUpdate(Request $request){
        $updateProfile = User::find(Auth::user()->id);
        $updateProfile->name = $request->name;
        $updateProfile->email = $request->email;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/user_profile_image/' . $updateProfile->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_profile_image'), $filename);
            $updateProfile['photo'] = $filename;
        }
        $updateProfile->save();
        return redirect()->route('user.profile')->with('success', 'Profile updated successfull');
    }

    // User Password Update Method
    public function passwordUpdate(Request $request){
        $oldPassword = Auth::user()->password;
        if(Hash::check($request->currentPassword, $oldPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }
}
