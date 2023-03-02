<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
