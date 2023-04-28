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
    public function adminPage(){
        return view('admin');
    }

    public function adminDashboard()
    {
        return view('.admin-dashboard.index');
    }
    public function adminRegister(){
        return view('register-admin');
    }
}
