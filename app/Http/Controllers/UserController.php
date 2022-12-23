<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    public function loadUserProfile(){
        $data['user'] = Auth::user();
        return view('User.profile',$data);
    }

    public function updateProfile(Request $request){
        try{
            $user = User::find(Auth::id());
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact = $request->contact;
            $user->address = $request->address;
            $user->age = $request->age;
            $user->gender = $request->gender;
           
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/users/'.$user->name.' '.$user->id);
                $path = str_replace('public','',$path);
                $user->image = $path;
            }


            $user->save();
            $request->session()->flash('success', 'Profile Updated Successfully');
            return back();
        }catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to update profile');
            return back();
        }
    }

 
}
