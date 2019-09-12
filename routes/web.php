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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function(){
    return view('auth.login');
})->name('login');
Route::get('/invoice', function(){
    return view('customer.invoice');
})->name('customer.invoice');
Route::get('/payments', function(){
    return view('customer.payments');
})->name('customer.payments');
Route::get('/help', function(){
    return view('customer.help');
})->name('customer.help');

Route::get('/legal', function(){
    return view('customer.legal');
})->name('customer.legal');

Route::get('/calendar', function(){
    return view('customer.calendar');
})->name('customer.calendar');
