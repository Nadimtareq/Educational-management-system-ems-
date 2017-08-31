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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'ResultController@index')->name('admin_result');
    Route::get('/subject', 'ResultController@subject')->name('admin_result_subject');
    Route::get('/exams', 'ResultController@exam')->name('admin_result_exam');
    Route::post('/filter', 'ResultController@filter')->name('admin_result_filter');

});
