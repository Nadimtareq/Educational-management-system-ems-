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

Route::group(['prefix' => 'teacher'], function () {
  Route::get('/', 'DeshboardController@index')->name('teacher_deshboard');
  Route::get('/studentattendance', 'StudentAttendanceController@index')->name('teacher_student_attendance');
  Route::get('/AttendanceBydate/{date?}', 'StudentAttendanceController@AttendanceBydate')->name('teacher_student_AttendanceBydate');

  Route::get('/student/result', 'StudentResultController@index')->name('teacher_student_result');
  Route::post('/student/result/Filter', 'StudentResultController@Filter')->name('teacher_student_result_filter');
  Route::post('/student/result/update', 'StudentResultController@update')->name('teacher_student_result_update');
  Route::get('/student/result/create', 'StudentResultController@create')->name('teacher_student_result_create');
  Route::post('/student/result/store', 'StudentResultController@store')->name('teacher_student_result_store');
  Route::get('/exam/{id}', 'StudentResultController@exam')->name('teacher_student_result_exam');


  Route::get('/account', 'AccountController@index')->name('teacher_account');
  Route::get('/myclass', 'MyclassController@index')->name('teacher_myclass');
  Route::get('/attendance', 'AttendanceController@index')->name('teacher_attendance');
  Route::get('/leave', 'leaveController@index')->name('teacher_leave');
  Route::get('/basicinfo', 'BasicinfoController@index')->name('teacher_basicinfo');
  Route::post('/basicinfo/update', 'BasicinfoController@update')->name('teacher_update');
});

Route::group(['prefix' => 'teacher/elibrary'], function () {
    Route::get('/', 'ElibraryController@index')->name('teacher_Elibrary');
    Route::get('/create', 'ElibraryController@create')->name('teacher_Elibrary_create');
    Route::post('/store', 'ElibraryController@store')->name('teacher_Elibrary_store');
    Route::get('/edit/{id}', 'ElibraryController@edit')->name('teacher_Elibrary_edit');
    Route::get('/show/{id}', 'ElibraryController@show')->name('teacher_Elibrary_show');
    Route::post('/update', 'ElibraryController@update')->name('teacher_Elibrary_update');
    Route::get('/destroy/{id}', 'ElibraryController@destroy')->name('teacher_Elibrary_delete');
});

Route::group(['prefix' => 'teacher/student/attentance'], function () {
Route::post('/store', 'StudentAttendanceController@store')->name('teacher_student_Attendance_store');
Route::post('/update', 'StudentAttendanceController@update')->name('teacher_student_Attendance_update');
Route::get('/create', 'StudentAttendanceController@create')->name('teacher_student_Attendance_create');

});
