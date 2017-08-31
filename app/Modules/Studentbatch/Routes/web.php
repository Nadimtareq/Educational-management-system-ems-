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

Route::group(['prefix' => 'studentbatch'], function () {

    Route::get('/', 'BatchController@index')->name('studentbatch');
    Route::get('/create', 'BatchController@create')->name('studentbatch_create');
    Route::post('/store', 'BatchController@store')->name('studentbatch_store');
    Route::get('/edit/{id}', 'BatchController@edit')->name('studentbatch_edit');
    Route::get('/show/{id}', 'BatchController@show')->name('studentbatch_show');
    Route::post('/update/{id}', 'BatchController@update')->name('studentbatch_update');
    Route::get('/destroy/{id}', 'BatchController@destroy')->name('studentbatch_delete');
    Route::get('/getstudent', 'BatchController@getstudent')->name('studentbatch_getstudent');
    Route::get('/getallstudent', 'BatchController@getAllStudent')->name('studentbatch_getAllStudent');
});

Route::group(['prefix' => 'student/attendance'], function () {

    Route::get('/', 'StudentAttendanceController@index')->name('studentattendance');
    Route::get('/create', 'StudentAttendanceController@create')->name('studentattendance_create');
    Route::post('/store', 'StudentAttendanceController@store')->name('studentattendance_store');
    Route::get('/edit/{id}', 'StudentAttendanceController@edit')->name('studentattendance_edit');
    Route::get('/show/{id}', 'StudentAttendanceController@show')->name('studentattendance_show');
    Route::post('/update', 'StudentAttendanceController@update')->name('studentattendance_update');
    Route::get('/destroy/{id}', 'StudentAttendanceController@destroy')->name('studentattendance_delete');
    Route::get('/getteacher', 'StudentAttendanceController@getteacher')->name('studentattendance_getteacher');
    Route::get('/getallstudent', 'StudentAttendanceController@getAllStudent')->name('studentattendance_getAllStudent');
    Route::get('/getAllStudentByDate', 'StudentAttendanceController@getAllStudentByDate')->name('studentattendance_getAllStudentByDate');
});
