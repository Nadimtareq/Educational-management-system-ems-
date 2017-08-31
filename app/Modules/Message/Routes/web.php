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

Route::group(['prefix' => 'message'], function(){
    Route::get('/', 'MessageController@index')->name('message');
    Route::get('/create', 'MessageController@create')->name('message_create');
    Route::post('/store', 'MessageController@store')->name('message_store');
    Route::get('/edit/{id}', 'MessageController@edit')->name('message_edit');
    Route::get('/show/{id}', 'MessageController@show')->name('message_show');
    Route::post('/update/{id}', 'MessageController@update')->name('message_update');
    Route::get('/delete/{id}', 'MessageController@delete')->name('message_delete');
});
