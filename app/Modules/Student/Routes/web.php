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

Route::group(['prefix' => '/student/studentdashboard'], function () {
    Route::get('/', 'DashboardController@index')->name('studentdashboard');
    Route::get('/create', 'DashboardController@create')->name('studentdashboard_create');
    Route::post('/store', 'DashboardController@store')->name('studentdashboard_store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('studentdashboard_edit');
    Route::get('/show/{id}', 'DashboardController@show')->name('studentdashboard_show');
    Route::post('/update/{id}', 'DashboardController@update')->name('studentdashboard_update');
    Route::get('/delete/{id}', 'DashboardController@delete')->name('studentdashboard_delete');

});

Route::group(['prefix' => '/student/basic'], function () {
    Route::get('/', 'BasicController@index')->name('basic');
    Route::get('/create', 'BasicController@create')->name('basic_create');
    Route::post('/store', 'BasicController@store')->name('basic_store');
    /*Route::get('/edit/{id}', 'BasicController@edit')->name('basic_edit');*/
    Route::get('/show/{id}', 'BasicController@show')->name('basic_show');
    Route::post('/update', 'BasicController@update')->name('basic_update');
    Route::get('/delete/{id}', 'BasicController@delete')->name('basic_delete');

});

Route::group(['prefix' => '/student/batch'], function () {
    Route::get('/', 'BatchController@index')->name('batch');
    Route::get('/create', 'BatchController@create')->name('batch_create');
    Route::post('/store', 'BatchController@store')->name('batch_store');
    Route::get('/edit/{id}', 'BatchController@edit')->name('batch_edit');
    Route::get('/show/{id}', 'BatchController@show')->name('batch_show');
    Route::post('/update/{id}', 'BatchController@update')->name('batch_update');
    Route::get('/delete/{id}', 'BatchController@delete')->name('batch_delete');

});

Route::group(['prefix' => '/student/certificate'], function () {
    Route::get('/', 'CertificateController@index')->name('certificate');
    Route::get('/create', 'CertificateController@create')->name('certificate_create');
    Route::post('/store', 'CertificateController@store')->name('certificate_store');
    Route::get('/edit/{id}', 'CertificateController@edit')->name('certificate_edit');
    Route::get('/show/{id}', 'CertificateController@show')->name('certificate_show');
    Route::post('/update/{id}', 'CertificateController@update')->name('certificate_update');
    Route::get('/delete/{id}', 'CertificateController@delete')->name('certificate_delete');

});
Route::group(['prefix' => '/student/lleave'], function () {
    Route::get('/', 'LeaveController@index')->name('lleave');
    Route::get('/create', 'LeaveController@create')->name('lleave_create');
    Route::post('/store', 'LeaveController@store')->name('lleave_store');
    Route::get('/edit/{id}', 'LeaveController@edit')->name('lleave_edit');
    Route::get('/show/{id}', 'LeaveController@show')->name('lleave_show');
    Route::post('/update/{id}', 'LeaveController@update')->name('lleave_update');
    Route::get('/delete/{id}', 'LeaveController@delete')->name('lleave_delete');

});

Route::group(['prefix' => '/student/result'], function () {
    Route::get('/', 'ResultController@index')->name('student_result');

    Route::post('/show', 'ResultController@show')->name('student_result_show');
//    Route::get('/create', 'ResultController@create')->name('student_result_create');
//    Route::post('/store', 'ResultController@store')->name('student_result_store');
//    Route::get('/edit/{id}', 'ResultController@edit')->name('student_result_edit');
//    Route::get('/show/{id}', 'ResultController@show')->name('student_result_show');
//    Route::post('/update/{id}', 'ResultController@update')->name('result_update');
//    Route::get('/delete/{id}', 'ResultController@delete')->name('result_delete');



});

Route::group(['prefix' => '/student/account'], function () {
    Route::get('/', 'AccountController@index')->name('account');
    Route::get('/create', 'AccountController@create')->name('account_create');
    Route::post('/store', 'AccountController@store')->name('account_store');
    Route::get('/edit/{id}', 'AccountController@edit')->name('account_edit');
    Route::get('/show/{id}', 'AccountController@show')->name('account_show');
    Route::post('/update/{id}', 'AccountController@update')->name('account_update');
    Route::get('/delete/{id}', 'AccountController@delete')->name('account_delete');

});

Route::group(['prefix' => '/student/atten_dance'], function () {
    Route::get('/', 'AttendanceController@index')->name('attendance');
    Route::get('/create', 'AttendanceController@create')->name('attendance_create');
    Route::post('/store', 'AttendanceController@store')->name('attendance_store');
    Route::get('/edit/{id}', 'AttendanceController@edit')->name('attendance_edit');
    Route::get('/show/{id}', 'AttendanceController@show')->name('attendance_show');
    Route::post('/update/{id}', 'AttendanceController@update')->name('attendance_update');
    Route::get('/delete/{id}', 'AttendanceController@delete')->name('attendance_delete');

});
