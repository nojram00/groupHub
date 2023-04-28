<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\parkingFloorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\VehicleController;
use App\Models\admin;
use Illuminate\HTTP\Request;
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
// Route::post('/registered', [registrationController::class, 'registerUser']);
// Route::post('/signedin', [loginController::class, 'loginUser']);


//Verification

// Route::get('/register/verify', [mainController::class, 'verify'])->middleware('auth')->name('verification.notice');
// // Route::get('register/verify', [registrationController::class, 'userVerification'])->middleware(['auth', 'signed'])->name('verification.notice');
// Route::post('/register/verifiction-notification', [registrationController::class, 'sendVerification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::post('/logout', [loginController::class, 'logoutUser'])->middleware('auth');

Route::get('/registration-done', [registrationController::class, 'registerDone'])->middleware('auth');




Route::post('/signedin', [loginController::class, 'loginUser']);
Route::post('/registered', [registrationController::class, 'registerUser']);


Route::post('/adminsigned', [adminController::class, 'regAdmin']);


Route::get('/test', function(Request $request){
    dd($request);

});

Route::middleware('guest')->group(function(){
    Route::get('/login', [mainController::class, 'loginPage'])->name('login');
    Route::get('/register', [mainController::class, 'registerPage']);
});

//For Users:
Route::middleware(['auth', 'user-access:user'])->group(function(){

    //Parking Floors:
    Route::get('/floors/{floorNo}', [parkingFloorController::class, 'floors']);
    Route::get('/parking/{floor}/{parkingID}',[parkingFloorController::class, 'checkParking']);
    Route::get('/parkHere/{floor}/{parkingID}/{plateNo}', [parkingFloorController::class, 'parkHere']);

    Route::get('/getFloors/{parkingID}', [VehicleController::class, 'vehicleTest']);
    Route::post('/car-registered', [VehicleController::class, 'registerVehicle']);

    //Dashboard(User):
    Route::get('/', [mainController::class, 'homePage']);
    Route::get('/notifications', [mainController::class, 'notifications']);
    Route::get('/settings', [mainController::class, 'settingsPage']);
    Route::get('/logoutPre', [loginController::class, 'logoutUser']);

    //confirmation
    Route::get('/parking/confirm/{floor}/{parkingID}/{parkingVehicle}',[parkingFloorController::class, 'confirmationPrompt']);

    //Payment
    Route::get('/pay', [PaymentController::class, 'pay']);

    //Back. Just back...
    Route::get('/back/{parkingFloor}', [parkingFloorController::class, 'backToParking']);
});

//for Admin:
Route::middleware(['auth', 'user-access:admin'])->group(function(){
    //Dashboard(Admin):
    Route::get('/admin-dashboard', [adminController::class, 'adminDashboard']);
    Route::get('/admin/parkingfloors/{level}', [adminController::class, 'adminParkingFloors']);
    Route::get('/updateFloor/{floorLevel}/{id}',[adminController::class, 'updateFloor']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
