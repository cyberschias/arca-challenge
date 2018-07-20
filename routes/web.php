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

Route::get('/', 'FrontEndController@index')->name('frontend.index');
Route::get('/{url}', 'FrontEndController@show');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@checkLogin');
    Route::get('logout', 'AuthController@logout');

    Route::group(['middleware' => 'sentinel.auth'], function () {
        Route::get('/', 'HomeController@index');
        Route::resource('users', 'UserController');
        Route::resource('categories', 'CategoryController');
        Route::resource('businesses', 'BusinessController');
    });
});


