<?php

namespace App\Http\Controllers;

use App\Models\parkingUsers;
use App\Models\User;
use Database\Seeders\ParkingUserSeeder;
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
        return view('home');
    }

    public function registerPage(){
        return view('register');
    }

    public function index(){
        return view('index');
    }

    public function accountChecker(Request $request){
        dd($request);
    }
    
}
