<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeGeneralController@index');

Route::get('destinations', 'DestinationController@index');
Route::get('destination/{id}', 'DestinationController@show');
Route::get('festivals', 'FestivalController@index');
Route::get('festival/{id}', 'FestivalController@show');
Route::get('contact', 'ContactController@index');

Route::post('message/send', 'MessageController@store');

Route::get('cities/{id_prov}', 'AddressController@city');
Route::get('districts/{id_city}', 'AddressController@district');
Route::get('villages/{id_district}', 'AddressController@village');
Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
Route::post('login/auth', ['as' => 'login.post', 'uses' => 'UserController@login_post']);
Route::get('register', 'UserController@register');

Route::post('register', 'UserController@register_post');

// Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::get('admin/destinations', ['as' => 'destinations.index', 'uses' => 'Admin\DestinationController@index']);
    Route::get('admin/destination/create', ['as' => 'destination.create', 'uses' => 'Admin\DestinationController@create']);
    Route::post('admin/destination/store', ['as' => 'destination.store', 'uses' => 'Admin\DestinationController@store']);
    Route::get('admin/destination/edit/{id}', ['as' => 'destination.edit', 'uses' => 'Admin\DestinationController@edit']);
    Route::post('admin/destination/update/{id}', ['as' => 'destination.update', 'uses' => 'Admin\DestinationController@update']);
    Route::get('admin/destination/destroy/{id}', ['as' => 'destination.update', 'uses' => 'Admin\DestinationController@destroy']);

    Route::get('admin/destinations/categories', ['as' => 'category.index', 'uses' => 'Admin\DestinationController@category_index']);
    Route::get('admin/destinations/categories/create', ['as' => 'category.create', 'uses' => 'Admin\DestinationController@category_create']);
    Route::post('admin/destinations/categories/store', ['as' => 'category.store', 'uses' => 'Admin\DestinationController@category_store']);
    Route::get('admin/destinations/categories/edit/{id}', ['as' => 'category.edit', 'uses' => 'Admin\DestinationController@category_edit']);
    Route::post('admin/destinations/categories/update/{id}', ['as' => 'category.update', 'uses' => 'Admin\DestinationController@category_update']);
    Route::get('admin/destinations/categories/destroy/{id}', ['as' => 'category.destroy', 'uses' => 'Admin\DestinationController@category_destroy']);

    Route::get('admin/festivals', ['as' => 'festivals.index', 'uses' => 'Admin\FestivalController@index']);
    Route::get('admin/festival/create', ['as' => 'festivals.create', 'uses' => 'Admin\FestivalController@create']);
    Route::post('admin/festival/store', ['as' => 'festivals.store', 'uses' => 'Admin\FestivalController@store']);
    Route::get('admin/festival/edit/{id}', ['as' => 'festivals.edit', 'uses' => 'Admin\FestivalController@edit']);
    Route::post('admin/festival/update/{id}', ['as' => 'festivals.update', 'uses' => 'Admin\FestivalController@update']);
    Route::get('admin/festival/destroy/{id}', ['as' => 'festivals.destroy', 'uses' => 'Admin\FestivalController@destroy']);

    Route::get('admin/festivals/categories', ['as' => 'criteria.index', 'uses' => 'Admin\FestivalController@category_index']);
    Route::get('admin/festivals/categories/create', ['as' => 'criteria.create', 'uses' => 'Admin\FestivalController@category_create']);
    Route::post('admin/festivals/categories/store', ['as' => 'criteria.store', 'uses' => 'Admin\FestivalController@category_store']);
    Route::get('admin/festivals/categories/edit/{id}', ['as' => 'criteria.edit', 'uses' => 'Admin\FestivalController@category_edit']);
    Route::post('admin/festivals/categories/update/{id}', ['as' => 'criteria.update', 'uses' => 'Admin\FestivalController@category_update']);
    Route::get('admin/festivals/categories/destroy/{id}', ['as' => 'criteria.destroy', 'uses' => 'Admin\FestivalController@category_destroy']);

    Route::get('admin/messages', ['as' => 'message.index', 'uses' => 'Admin\MessageController@index']);
});
