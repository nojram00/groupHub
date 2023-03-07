<?php

namespace App\Http\Controllers;

use App\Models\parkingUsers;
use Illuminate\Http\Request;
use App\Models\User;

class registrationController extends Controller
{
    public function registerUser(Request $request){

        $credentials = $request->validate([
            "name" => ['required'],
            "email" => ['required','email'],
            "password" => ['required', 'confirmed'],
        ]);

        $credentials["password"] = bcrypt($credentials["password"]);
        $user = User::create($credentials);

        // return $user;
        auth()->login($user);
        return redirect('/')->with('message', 'Welcome to SM Parking Dashboard!');
    }
}
