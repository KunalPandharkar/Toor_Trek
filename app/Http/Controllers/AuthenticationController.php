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

class AuthenticationController extends Controller
{
    public function loadLogin(){
        return view('authentication.login');
    }

    public function loadRegister(){
    
        return view('authentication.register');
    }
    
    public function registerUser(RegisterRequest $request){
        // dd($request->all());


        try {
            $alreadyEmail = User::where('email', '=', $request->email)->first();

            if($alreadyEmail == NULL){
                $user = new User;
                $user->name = $request->username;
                $user->email = $request->email;
                $user->password = Hash::make($request->get('password'));
                $user->save();
                Auth::login($user);
                $request->session()->flash('success', 'Registerd Successfully, Please Update Profile');
                return redirect(route('user.profile'));
            }else{
                $request->session()->flash('error', 'Email Already Registered. Please Login');
                return redirect(route('login'));
            }

            //code...
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to register');
            return back();
        }
    }

    public function loginUser(LoginRequest $request){

        try {
            $request->authenticate();
            $request->session()->regenerate();
          
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to login, Please use correct Details');
            return back();
        }

        if(Auth::user()->isBlocked){
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $request->session()->flash('error', 'Failed to login, Please use correct Details!');
            return back();
        }

        $request->session()->flash('success', 'Logged in successfully!');
       
        return redirect()->intended(route('Home'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $request->session()->flash('success', 'Logged out successfully!');
        return redirect(route('login'));
    }
}
