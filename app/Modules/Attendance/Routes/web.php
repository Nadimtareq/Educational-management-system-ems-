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

Route::group(['prefix' => 'attendance'], function () {

    Route::get('/', 'StaffteacherAttendanceController@index')->name('teacherattendance');
    Route::get('/create', 'StaffteacherAttendanceController@create')->name('teacherattendance_create');
    Route::post('/store', 'StaffteacherAttendanceController@store')->name('teacherattendance_store');
    Route::get('/edit/{id}', 'StaffteacherAttendanceController@edit')->name('teacherattendance_edit');
    Route::get('/show/{id}', 'StaffteacherAttendanceController@show')->name('teacherattendance_show');
    Route::post('/update', 'StaffteacherAttendanceController@update')->name('teacherattendance_update');
    Route::get('/destroy/{id}', 'StaffteacherAttendanceController@destroy')->name('teacherattendance_delete');
    Route::get('/getstudent', 'StaffteacherAttendanceController@getstudent')->name('teacherattendance_getstudent');
    Route::get('/getallstudent', 'StaffteacherAttendanceController@getAllStudent')->name('teacherattendance_getAllStudent');
    Route::get('/getAllStaff', 'StaffteacherAttendanceController@getAllStaff')->name('teacherattendance_getAllStaff');

    
});
