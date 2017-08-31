<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'result'], function(){
    Route::get('/{id}', 'ResultController@index')->name('result');
    Route::post('/create', 'ResultController@create')->name('result_create');
    Route::post('/store', 'ResultController@store')->name('result_store');
    Route::get('/edit/{id}', 'ResultController@edit')->name('result_edit');
    Route::get('/show/{id}', 'ResultController@show')->name('result_show');
    Route::post('/update/{id}', 'ResultController@update')->name('result_update');
    Route::get('/delete/{id}', 'ResultController@delete')->name('result_delete');

});