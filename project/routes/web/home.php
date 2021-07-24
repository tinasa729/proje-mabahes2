<?php

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

use App\User;
use \Illuminate\Support\Facades\Gate;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/auth/google' ,'Auth\GoogleAuthController@redirect')->name('auth.google');
Route::get('/auth/google/callback' ,'Auth\GoogleAuthController@callback');

Route::post('/verify' ,'Auth\AuthTokenController@verify');
Route::post('/verify/validatecode' ,'Auth\AuthTokenController@validatecode');
Route::post('/register' ,'Auth\RegisterController@newcreate');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/secret' , function() {
    return 'secret';
})->middleware(['auth' , 'password.confirm']);


Route::middleware('auth')->group(function() {
    Route::prefix('profile')->namespace('Profile')->group(function() {
        Route::get('/' , 'IndexController@index')->name('profile');
        
        Route::get('orders' , 'OrderController@index')->name('profile.orders');
        Route::get('orders/{order}' , 'OrderController@showDetails')->name('profile.orders.detail');
        Route::get('orders/{order}/payment' , 'OrderController@payment')->name('profile.orders.payment');
    });
    Route::post('payment' , 'PaymentController@payment')->name('cart.payment');
    Route::get('payment/callback' , 'PaymentController@callback')->name('payment.callback');
});
Route::get('products' , 'ProductController@index');
Route::get('products/{product}' , 'ProductController@single');
Route::post('cart/add/{product}' , 'CartController@addToCart')->name('cart.add');
Route::get('cart' , 'CartController@cart');
Route::patch('cart/quantity/change' , 'CartController@quantityChange');
Route::delete('cart/delete/{cart}' , 'CartController@deleteFromCart')->name('cart.destroy');


Route::middleware('auth')->resource('RequestBook' , 'RequestBooksController');
