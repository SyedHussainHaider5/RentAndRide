<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarDataController;
use App\Http\Controllers\RentalRequestController;
use App\Http\Controllers\RentalHistoryController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/browse_cars', function () {
    return view('browse_cars');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin_login', function () {
    return view('admin_login');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/cars_data', function () {
    if(session()->has('admin_username')){
        return view('cars_data');
    }
    else{
        return view('home');
    }
    
});

Route::post('store',[SignupController::class,'store']);
Route::post('storecar',[CarDataController::class,'storecar']);
Route::get('showcars',[CarDataController::class,'show']);
Route::get('deletecar/{id}',[CarDataController::class,'destroy']);
Route::get('editcar/{id}',[CarDataController::class,'edit']);
Route::post('updatecar/{id}',[CarDataController::class,'update']);
Route::get('deleteuser/{id}',[SignupController::class,'destroy']);
Route::get('showusers',[SignupController::class,'show']);

Route::post('adminlogin',[LoginController::class,'admin_login']);
Route::get('/admin_profile', function () {
    if(session()->has('admin_username')){
        return view('admin_profile');
    }
    else{
        return view('home');
    }
});
Route::get('/adminlogout', function () {
    if(session()->has('admin_username')){
        session()->pull('admin_username',null);
    }
    return redirect('home');
});
// Show all cars
Route::get('showallcars',[CarDataController::class,'showallcars']);
Route::get('showsedan',[CarDataController::class,'showsedan']);
Route::get('showsuv',[CarDataController::class,'showsuv']);
Route::get('showhatchback',[CarDataController::class,'showhatchback']);
Route::get('showsports',[CarDataController::class,'showsports']);

//show specofic car for hire
Route::get('showcar/{id}',[CarDataController::class,'showcar']);


//user login-----------
Route::post('userlogin',[LoginController::class,'user_login']);
Route::get('/user_profile', function () {
    if(session()->has('user')){
        return view("user_profile");
    }
    else{
        return view('home');
    }
});
Route::get('/userlogout', function () {
    if(session()->has('user')){
        session()->pull('user',null);   
    }
    return redirect('home');
});

Route::get('edituser/{id}',[LoginController::class,'edit']);
Route::post('updateuser/{id}',[LoginController::class,'update']);

//Dealing with rental requests
Route::get('showallrequests',[RentalRequestController::class,'showallrequests']);
Route::post('storerequest/{id}',[RentalRequestController::class,'store']);

//Accepting Requests and Rental History table
Route::get('acceptrequest/{id}',[RentalHistoryController::class,'acceptrequest']);
Route::get('showrentalhistory',[RentalHistoryController::class,'showall']);
Route::get('userrentalhistory',[RentalHistoryController::class,'userrentalhistory']);

