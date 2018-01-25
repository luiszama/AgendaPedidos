<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*************************************************************************************/
Route::get('orders/{order}/report', 'OrderController@report')->name('orders.report');
Route::Post('orders/refac', 'OrderController@refac')->name('orders.refac');

Route::resource('orders', 'OrderController');
