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

Route::group(['prefix' => 'career'], function () {
    Route::get('/', 'careerController@index')->name('career');
    Route::get('/create', 'careerController@create')->name('career_create');
    Route::post('/store/{id}', 'careerController@store')->name('career_store');
    Route::get('/delete', 'careerController@delete')->name('career_delete');
});
