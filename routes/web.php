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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');

Route::get('/players/{id}', 'PlayerController@show');

Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');

Route::get('/login', 'LoginController@loginview');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');