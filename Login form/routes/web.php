<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('login.login');
// });

Route::get('/login','loginController@index');

Route::post('/login','loginController@posted');
Route::get('/home','loginController@home');
Route::get('/login/userlist', 'UserController@userLists');
Route::get('login/create_user', 'UserController@create');
Route::get('login/logout', 'UserController@logout');

Route::post('/login/create_user', 'UserController@insert');
Route::get('/user/details/{id}', 'UserController@details');

Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/edit/{id}', 'UserController@update');

Route::get('/user/delete/{id}', 'UserController@delete');
Route::post('/user/delete/{id}', 'UserController@destroy');

// Route::get('/login', [loginController::class, 'index']);
