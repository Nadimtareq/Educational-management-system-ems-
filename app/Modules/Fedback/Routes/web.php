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

Route::group(['prefix' => 'fedback'], function () {
   /* Route::get('/', function () {
        dd('This is the Fedback module index page. Build something great!');
    });*/
    Route::get('/show', 'WebController@show')->name('fedback_show');
    Route::get('/fedback', 'WebController@fedback')->name('fedback');
    Route::post('/store', 'WebController@store')->name('fedback_store');
});
