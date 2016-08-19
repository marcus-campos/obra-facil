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

Route::get('/', ['uses' => 'PsoController@show', 'as' => 'home']);

Route::get('/pso/{serviceid}/{metragem}/{dia}/{quantHoras}', ['uses' => 'Math\FormulasController@pso', 'as' => 'pso']);

Route::get('/pso', ['uses' => 'PsoController@show', 'as' => 'pso']);

Route::get('/category', ['uses' => 'PsoController@category', 'as' => 'category']);

Route::get('/service/{id}', ['uses' => 'PsoController@service', 'as' => 'service']);


Route::group(['prefix' => 'panel'], function () {
    Route::get('/obra', ['uses' => 'DashBoard\DashBoard\HomeController@show', 'as' => 'dashboard.dashboard.home']);
});