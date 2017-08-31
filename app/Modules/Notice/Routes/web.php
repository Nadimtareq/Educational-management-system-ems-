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

Route::group(['prefix' => 'notice'], function () {
    Route::get('/', 'NoticeBoardController@index')->name('notice');
    Route::get('/create', 'NoticeBoardController@create')->name('notice_create');
    Route::post('/store', 'NoticeBoardController@store')->name('notice_store');
    Route::get('/edit/{id}', 'NoticeBoardController@edit')->name('notice_edit');
    Route::get('/show/{id}', 'NoticeBoardController@show')->name('notice_show');
    Route::post('/update', 'NoticeBoardController@update')->name('notice_update');
    Route::get('/destroy/{id}', 'NoticeBoardController@destroy')->name('notice_delete');
});
