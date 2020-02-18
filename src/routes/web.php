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

// STEP 2-3
Route::get('/user', 'UserController@index');
Route::get('/user/show', 'UserController@show');
Route::get('/user/delete/{email}', 'UserController@delete');


// STEP 2-4
Route::get('/bbs', 'BbsController@index');
Route::post('/bbs', 'BbsController@create');
