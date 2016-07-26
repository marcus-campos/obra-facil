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

/*Route::get('/', function (){
    return view('signin.auth.auth');
});*/

Route::get('/', ['uses' => 'AsoController@show', 'as' => 'dashboard.dashboard.home']);


Route::group(['prefix' => 'panel'], function () {
    Route::get('/obra', ['uses' => 'DashBoard\DashBoard\HomeController@show', 'as' => 'dashboard.dashboard.home']);
});