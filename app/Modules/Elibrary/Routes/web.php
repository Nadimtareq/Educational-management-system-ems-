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

Route::group(['prefix' => 'electronic/elibrary'], function () {
    Route::get('/', 'ElibraryController@index')->name('Elibrary');
    Route::get('/create', 'ElibraryController@create')->name('Elibrary_create');
    Route::post('/store', 'ElibraryController@store')->name('Elibrary_store');
    Route::get('/edit/{id}', 'ElibraryController@edit')->name('Elibrary_edit');
    Route::get('/show/{id}', 'ElibraryController@show')->name('Elibrary_show');
    Route::post('/update', 'ElibraryController@update')->name('Elibrary_update');
    Route::get('/destroy/{id}', 'ElibraryController@destroy')->name('Elibrary_delete');
});


