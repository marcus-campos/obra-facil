<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function (){
    return view('signin.auth.auth');
});

Route::get('/hash', function () {
    return Hash::make('123');
});

Route::post('/signin', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'user.signin']);

Route::group(['before' => 'auth'],function() {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('home', ['uses' => 'DashBoard\DashBoard\HomeController@show', 'as' => 'dashboard.dashboard.home']);
    });

    Route::group(['prefix' => 'panel'], function () {

    });

    Route::group(['prefix' => 'finance'], function () {

    });

    Route::group(['prefix' => 'ecommerce'], function () {
        Route::get('product', ['uses' => 'eCommerce\Products\ProductsController@show', 'as' => 'ecommerce.products.products']);
    });


    Route::group(['prefix' => 'settings'], function () {
        Route::get('user', ['uses' => 'Settings\Users\UserController@show', 'as' => 'settings.users.users']);
    });
});