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
    return view('cust.invoice');
})->name('cust.invoice');
Route::get('/payments', function(){
    return view('cust.payments');
})->name('cust.payments');
Route::get('/help', function(){
    return view('cust.help');
})->name('cust.help');

Route::get('/legal', function(){
    return view('cust.legal');
})->name('cust.legal');

Route::get('/calendar', function(){
    return view('cust.calendar');
})->name('cust.calendar');
Route::get('/document', function(){
    return view('cust.document');
})->name('cust.document');
Route::get('/task', function(){
    return view('cust.task');
})->name('cust.task');
Route::get('/dashboard', function(){
    return view('cust.dashboard');
})->name('cust.dashboard');
Route::get('/contactus', function(){
    return view('cust.contactus');
})->name('cust.contactus');
Route::get('/preferences', function(){
    return view('cust.preferences');
})->name('cust.preferences');
