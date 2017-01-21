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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contactus', function() {
	return view('contactus');
});

// delete the task
Route::delete('tasks/{id}','TaskCRUDController@destroy');

// shgow the form for creating the taskss
Route::get('/create', 'TaskCRUDController@index');
// process the create form 
Route::resource('tasks','TaskCRUDController@store');

// show the edit form
Route::get('tasks/edit/{id}', 'TaskCRUDController@edit');
// process the edit form
Route::PATCH('tasks/edit/{id}', 'TaskCRUDController@update');