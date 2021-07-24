<?php


Route::get('/' , function() {
   return view('admin.index');
});

Route::resource('users', 'UserController');
Route::resource('products' , 'ProductController')->except(['show']);

Route::resource('requestbooks', 'RequestBooksController')->except(['show']);


Route::resource('orders' , 'OrderController');
Route::get('orders/{order}/orders', 'OrderController@payments')->name('orders.payments');

Route::resource('categories' , 'CategoryController');

