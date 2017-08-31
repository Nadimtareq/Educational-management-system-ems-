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

Route::group(['prefix' => 'routine'], function () {
        Route::get('/', 'routineController@index')->name('routine');
        Route::get('/create', 'routineController@create')->name('routine_create');
        Route::post('/store', 'routineController@store')->name('routine_store');
        Route::get('/edit/{id}', 'routineController@edit')->name('routine_edit');
        Route::get('/show/{id}', 'routineController@show')->name('routine_show');
        Route::post('/update/{id}', 'routineController@update')->name('routine_update');
        Route::get('/delete/{id}', 'routineController@delete')->name('routine_delete');
        /*dd('This is the Routine module index page. Build something great!');*/
    });

