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

Route::group(['prefix' => 'slider'], function () {
    Route::get('/', 'SliderController@index')->name('slider');
    Route::get('/create', 'SliderController@create')->name('slider_create');
    Route::post('/store', 'SliderController@store')->name('slider_store');
    Route::get('/edit/{id}', 'SliderController@edit')->name('slider_edit');
    Route::get('/show/{id}', 'SliderController@show')->name('slider_show');
    Route::post('/update', 'SliderController@update')->name('slider_update');
    Route::get('/destroy/{id}', 'SliderController@destroy')->name('slider_delete');
});
