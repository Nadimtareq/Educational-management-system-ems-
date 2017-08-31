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

Route::group(['prefix' => 'leave'], function(){
    Route::get('/', 'LeaveController@index')->name('leave');
    Route::get('/create', 'LeaveController@create')->name('leave_create');
    Route::post('/store', 'LeaveController@store')->name('leave_store');
    Route::get('/edit/{id}', 'LeaveController@edit')->name('leave_edit');
    Route::get('/show/{id}', 'LeaveController@show')->name('leave_show');
    Route::post('/update/{id}', 'LeaveController@update')->name('leave_update');
    Route::get('/delete/{id}', 'LeaveController@delete')->name('leave_delete');
});
