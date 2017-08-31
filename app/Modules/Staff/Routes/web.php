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

Route::group(['prefix' => '/staff'], function () {
    Route::get('/', 'DashboardController@index')->name('staff');
    /*Route::get('/create', 'DashboardController@create')->name('staff_create');
    Route::post('/store', 'DashboardController@store')->name('staff_store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('staff_edit');
    Route::get('/show/{id}', 'DashboardController@show')->name('staff_show');
    Route::post('/update/{id}', 'DashboardController@update')->name('staff_update');
    Route::get('/delete/{id}', 'DashboardController@delete')->name('staff_delete');*/

});


Route::group(['prefix' => '/staff_basic'], function () {
    Route::get('/', 'BasicController@index')->name('staff_basic');
    Route::get('/create', 'BasicController@create')->name('staff_basic_create');
   /* Route::post('/store', 'DashboardController@store')->name('staff_basic_store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('staff_basic_edit');
    Route::get('/show/{id}', 'DashboardController@show')->name('staffbasic_show');
    Route::post('/update/{id}', 'DashboardController@update')->name('staffbasic_update');
    Route::get('/delete/{id}', 'DashboardController@delete')->name('staffbasic_delete');*/

});

Route::group(['prefix' => '/staff_leave'], function () {
    Route::get('/', 'LeaveController@index')->name('staff_leave');
   /* Route::get('/create', 'DashboardController@create')->name('staff_leave_create');
    Route::post('/store', 'DashboardController@store')->name('staff_leave_store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('staff_leave_edit');
    Route::get('/show/{id}', 'DashboardController@show')->name('staff_leave_show');
    Route::post('/update/{id}', 'DashboardController@update')->name('staff_update');
    Route::get('/delete/{id}', 'DashboardController@delete')->name('staff_delete');*/

});

Route::group(['prefix' => '/staff_attendance'], function () {
    Route::get('/', 'AttendanceController@index')->name('staff_attendance');
    Route::get('/create', 'DashboardController@create')->name('staff_create');
    /*Route::post('/store', 'DashboardController@store')->name('staff_store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('staff_edit');
    Route::get('/show/{id}', 'DashboardController@show')->name('staff_show');
    Route::post('/update/{id}', 'DashboardController@update')->name('staff_update');
    Route::get('/delete/{id}', 'DashboardController@delete')->name('staff_delete');*/

});


Route::group(['prefix' => '/staff_accounts'], function () {
    Route::get('/', 'AccountController@index')->name('staff_accounts');
    Route::get('/create', 'DashboardController@create')->name('staff_create');

});