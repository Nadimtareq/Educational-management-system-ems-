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

Route::group(['prefix' => 'publicresult'], function () {

    Route::get('/', 'WebController@index')->name('publicresult');
    Route::get('/create', 'WebController@create')->name('publicresult_create');
    Route::post('/store', 'WebController@store')->name('publicresult_store');
    Route::get('/edit/{id}', 'WebController@edit')->name('publicresult_edit');
    Route::get('/show/{id}', 'WebController@show')->name('publicresult_show');
    Route::post('/update/{id}', 'WebController@update')->name('publicresult_update');
    Route::get('/delete/{id}', 'WebController@delete')->name('publicresult_delete');
    /*Route::get('/', function () {
        dd('This is the Publicresult module index page. Build something great!');
    });*/
});
