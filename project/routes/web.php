<?php

use App\Http\Controllers\Auth\AuthTokenController;
use App\Http\Controllers\Profile\IndexController;
use App\Http\Controllers\Profile\TokenAuthController;
//se App\Http\Controllers\Profile\TwoFactorAuthController;
//use App\Http\Controllers\Profile;  
use App\Http\Controllers\Profile\TwoFactorAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleAuthController;
//use App\Http\Controllers;
//use Carbon\Carbon as time;
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
    return view('welcome');
});

Auth::routes(['verify'=>true]);


Route::get('/auth/google',[GoogleAuthController::class,'redirect'])->name('auth.google');
Route::get('/auth/google/callback',[GoogleAuthController::class,'callback']);

Route::get('/auth/token',[AuthTokenController::class,'getToken'])->name('2fa.token');
Route::post('/auth/token',[AuthTokenController::class,'postToken']);


Route::prefix('profile')->middleware('auth')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('profile');
    Route::get('/twofactor',[TwoFactorAuthController::class,'managetwofactor'])->name('profile.2fa.manage');
    Route::post('/twofactor',[TwoFactorAuthController::class,'postmanagetwofactor']);
    Route::get('edit' , 'IndexController@edit');
    Route::get('/twofactor/phone',[TokenAuthController::class,'getPhoneVerify'])->name('profile.2fa.phone');
    Route::post('/twofactor/phone',[TokenAuthController::class,'postPhoneVerify']);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/secret', function(){
    return 'secret';
})->middleware(['auth','password.confirm']);



//Route::get('/auth/token/code',[ProfileController::class,'sendsms'])->name('sendsms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
