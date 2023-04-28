<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class loginController extends Controller
{
    public function loginUser(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'role' => ['user']
        ]);

        if(Auth::attempt($credentials)){
            if(auth()->user()->role == 'user'){
                $request->session()->regenerate();
                $name = auth()->user()->name;
                return redirect('/')->with('message', 'Welcome Back ' . $name )
                                    ->with('header', 'Welcome!');
            }
            else if(auth()->user()->role == 'admin'){
                # admin page:
                return redirect('admin-dashboard');
            }
        }

        return back()->withErrors(['email' => 'Incorrect email/password'])->onlyInput('email');

    }
    public function logoutUser(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successfully...');
    }


    use AuthenticatesUsers;
    //Admin Controller:
    public function __construct()
    {
        $this ->middleware('guest')->except('logout');
        $this ->middleware('guest:admin')->except('logout');
    }
}
