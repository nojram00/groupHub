<?php

namespace App\Http\Controllers;

use App\Models\parkingFloorA;
use App\Models\parkingUsers;
use App\Models\User;
use Database\Seeders\ParkingUserSeeder;
use DateTime;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function homePage(){
        return view('.dashboard.home');
    }

    public function registerPage(){
        return view('register');
    }

    public function settingsPage(){
        return view('.dashboard.settings');
    }

    public function index(){
        return view('index');
    }

    public function adminPage(){
        return view('admin');
    }

    public function back(){
        return back();
    }

    public function verify(){
        return view('verification');
        // return view('auth.verify-email');
    }

    // public function accountChecker(Request $request){
    //     dd($request);
    // }

}
