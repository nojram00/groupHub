<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function loginPage(){
        return view('login');
    } 
}
