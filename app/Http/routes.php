<?php

Route::get('/', ['uses' => 'PsoController@show', 'as' => 'home']);

Route::group(['prefix' => 'pso'], function(){
    Route::get('/{serviceid}/{metragem}/{dia}/{quantHoras}', ['uses' => 'Math\FormulasController@pso', 'as' => 'pso']);
    Route::get('/', ['uses' => 'PsoController@show', 'as' => 'pso']);
});

Route::group(['prefix' => 'aso'], function(){
    Route::get('/service/{serviceid}', ['uses' => 'Math\FormulasController@asoWorkers', 'as' => 'aso']);
    Route::post('/calc', ['uses' => 'Math\FormulasController@aso', 'as' => 'aso']);
    Route::get('/', ['uses' => 'AsoController@show', 'as' => 'aso']);
});

Route::group(['prefix' => 'mso'], function(){
    Route::get('/{serviceid}/{metragem}', ['uses' => 'Math\FormulasController@mso', 'as' => 'mso']);
    Route::get('/', ['uses' => 'MsoController@show', 'as' => 'mso']);
});

Route::get('/category', ['uses' => 'PsoController@category', 'as' => 'category']);

Route::get('/service/{id}', ['uses' => 'PsoController@service', 'as' => 'service']);
Route::get('/pservice/{id}', ['uses' => 'PsoController@pservice', 'as' => 'pservice']);
Route::get('/punit/{id}', ['uses' => 'PsoController@punit', 'as' => 'punit']);
