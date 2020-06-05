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

Route::get('/', function () {
    return view('welcome');
});

Route::get('destinations', 'DestinationController@index');
Route::get('festivals', 'FestivalController@index');
Route::get('contact', 'ContactController@index');
Route::get('login', 'UserController@login');
Route::get('register', 'UserController@register');
