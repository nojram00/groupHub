<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\registrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/login', function(){
//     return view('login');
// });

Route::get('/login', [mainController::class, 'loginPage'])->name('login');
Route::get('/index', [mainController::class, 'index']);
Route::get('/register', [mainController::class, 'registerPage']);


Route::get('/', [mainController::class, 'homePage'])->middleware('auth');

Route::post('/checkaccount', [mainController::class, 'accountChecker']);
Route::post('/registered', [registrationController::class, 'registerUser']);
Route::post('/signedin', [loginController::class, 'loginUser']);
Route::post('/logout', [loginController::class, 'logoutUser']);
Route::get('/signup', function(){
    return view('reg');
});