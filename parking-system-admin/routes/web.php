<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\registrationController;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/index', [mainController::class, 'index']);
// Route::post('/checkaccount', [mainController::class, 'accountChecker']);

// Route::get('/login', [mainController::class, 'loginPage'])->name('login')->middleware('guest');
// Route::get('/register', [mainController::class, 'registerPage'])->middleware('guest');
// Route::get('/admin', [mainController::class, 'adminPage'])->name('admin')->middleware('guest');



// Route::get('/', [mainController::class, 'homePage'])->middleware(['auth', 'verified']);
// Route::get('/notifications', [mainController::class, 'notifications'])->middleware('auth');
// Route::get('/settings', [mainController::class, 'settingsPage'])->middleware('auth');
// Route::get('/logoutPre', [loginController::class, 'logoutUser'])->middleware('auth');



// Route::post('/registered', [registrationController::class, 'registerUser']);
// Route::post('/signedin', [loginController::class, 'loginUser']);
// Route::post('/logout', [loginController::class, 'logoutUser'])->middleware('auth');




// Route::get('/register/verify', [mainController::class, 'verify'])->middleware('auth')->name('verification.notice');
// // Route::get('register/verify', [registrationController::class, 'userVerification'])->middleware(['auth', 'signed'])->name('verification.notice');
// Route::post('/register/verifiction-notification', [registrationController::class, 'sendVerification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// //for admin:

// Route::post('/adminsigned', [adminController::class, 'loginAdmin']);
// Route::get('/admin-dashboard', [mainController::class, 'adminDashboard'])->name('admin')->middleware('auth');

Route::get('/', [mainController::class, 'adminDashboard'])->middleware('auth')->name('login');
Route::post('/loginadmin',[adminController::class, 'loginAdmin']);
Route::post('/registered', [adminController::class, 'registerAdmin']);
Route::get('/login', [mainController::class, 'adminPage'])->middleware('guest')->name('login');
Route::get('/register', [mainController::class, 'adminRegister']);
Route::post('/logout', [adminController::class, 'logoutAdmin'])->middleware('auth');

// pogiakohahaha123
