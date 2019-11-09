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
    return redirect()->route('cust.task');
});
//new task
Route::get('/task', function(){
    return view ('cust.task');
})->name('cust.task');

//getting all tasks
Route::get('/alltasks', function(){
    return view ('cust.tasks');
})->name('alltasks');

//  view task
// Route::get('/viewcreatedtask', function(){
//     return view ('cust.viewtask');
// })->name('viewcreatedtask');

// save task
Route::post('/SaveCreatedTask', 'AboutTask\TaskController@store');
//get tasks
Route::get('/getTasks','AboutTask\TaskController@getData');
// view task
Route::get('/alltasks/{id}','AboutTask\TaskController@showTask');
//update task
Route::post('/updateTask/{id}','AboutTask\TaskController@updateTask');
