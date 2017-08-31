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

Route::group(['prefix' => 'user/pending'], function () {


    Route::get('/', 'RoleController@index')->name('Role');
    Route::post('/store', 'RoleController@store')->name('Role_assign');
    Route::get('/edit/{id}', 'RoleController@edit')->name('Role_change');
    Route::post('/update', 'RoleController@update')->name('Role_update');


});

Route::group(['prefix' => 'user'], function () {


    Route::get('/', 'ProfileController@index')->name('profile');
    Route::get('/store', 'ProfileController@store')->name('Profile_assign');
    Route::get('/edit/{id}', 'ProfileController@edit')->name('Profile_change');
    Route::post('/update', 'ProfileController@update')->name('Profile_update');
    Route::get('/destroy/{id}', 'ProfileController@destroy')->name('Profile_delete');

});


Route::group(['prefix' => 'user/superadmin/admin'], function () {


    Route::get('/', 'SuperAdmin\AdminController@index')->name('user_superAdmin');
    Route::post('/store', 'SuperAdmin\AdminController@store')->name('user_superAdmin_store');
    Route::get('/edit/{id}', 'SuperAdmin\AdminController@edit')->name('user_superAdmin_edit');
    Route::post('/update', 'SuperAdmin\AdminController@update')->name('user_superAdmin_update');
    Route::get('/destroy/{id}', 'SuperAdmin\AdminController@destroy')->name('user_superAdmin_delete');
});

Route::group(['prefix' => 'user/superadmin/teacher'], function () {


    Route::get('/', 'SuperAdmin\TeacherController@index')->name('user_teacher');
    Route::post('/store', 'SuperAdmin\TeacherController@store')->name('user_teacher_store');
    Route::get('/edit/{id}', 'SuperAdmin\TeacherController@edit')->name('user_teacher_edit');
    Route::post('/update', 'SuperAdmin\TeacherController@update')->name('user_teacher_update');
    Route::get('/destroy/{id}', 'SuperAdmin\TeacherController@destroy')->name('user_teacher_delete');
});

Route::group(['prefix' => 'user/superadmin/staff'], function () {


    Route::get('/', 'SuperAdmin\StaffController@index')->name('user_staff');
    Route::post('/store', 'SuperAdmin\StaffController@store')->name('user_staff_store');
    Route::get('/edit/{id}', 'SuperAdmin\StaffController@edit')->name('user_staff_edit');
    Route::post('/update', 'SuperAdmin\StaffController@update')->name('user_staff_update');
    Route::get('/destroy/{id}', 'SuperAdmin\StaffController@destroy')->name('user_staff_delete');
});

Route::group(['prefix' => 'user/superadmin/student'], function () {


    Route::get('/', 'SuperAdmin\StudentController@index')->name('user_student');
    Route::post('/store', 'SuperAdmin\StudentController@store')->name('user_student_store');
    Route::get('/edit/{id}', 'SuperAdmin\StudentController@edit')->name('user_student_edit');
    Route::post('/update', 'SuperAdmin\StudentController@update')->name('user_student_update');
    Route::get('/destroy/{id}', 'SuperAdmin\StudentController@destroy')->name('user_student_delete');
});

