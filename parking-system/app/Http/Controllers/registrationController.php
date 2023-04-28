<?php

namespace App\Http\Controllers;

use App\Models\parkingUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
        return redirect('registration-done')->with('message', 'Welcome to SM Parking Dashboard!');
    }

    public function registerDone(){
        return view('registrationdone');
    }

    // public function userVerification(EmailVerificationRequest $request){
    //     $request->fulfill();

    //     return redirect('/');
    // }

    // public function sendVerification(Request $request){
    //     $request->user()->sendEmailVerificationNotification();

    //     return back()->with('message', 'Verification like has been sent.');
    // }
}
