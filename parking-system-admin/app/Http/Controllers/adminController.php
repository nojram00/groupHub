<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
        // Admin Login:

        public function loginAdmin(Request $request){

            $credentials = $request->validate([
                'admin_user' => ['required'],
                'admin_password' => ['required'],
            ]);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return  redirect()->intended('/');
            }

            // return back()->withErrors('message' = "An error occured");
            // dd($credentials);
            // return ($credentials);
        }

        public function registerAdmin(Request $request){
            $credentials = $request->validate([
                'admin_user' => ['required'],
                'admin_password' => ['required'],
            ]);

            $credentials["admin_password"] = bcrypt($credentials["admin_password"]);
            $admin = User::create($credentials);
            auth()->login($admin);
            return redirect('/');
        }

        public function logoutAdmin(Request $request){
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }
}
