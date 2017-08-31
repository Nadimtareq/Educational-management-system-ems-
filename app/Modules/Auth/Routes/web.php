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

Route::group(['prefix' => 'auth'], function () {
    Route::post('/', 'AuthController@index')->name('Auth');
    Route::get('/create', 'AuthController@create')->name('Auth_create');
    Route::post('/store', 'AuthController@store')->name('Auth_store');
    Route::get('/login', 'AuthController@login')->name('Auth_login');
    Route::get('/show/{id}', 'AuthController@show')->name('Auth_show');
    Route::post('/update', 'AuthController@update')->name('Auth_update');
    Route::get('/logout', 'AuthController@logout')->name('Auth_logout');
});

Route::group(['prefix' => 'registration'], function () {
    Route::get('/', 'RegistrationController@index')->name('Registration');
    Route::get('/create', 'RegistrationController@create')->name('Registration_create');
    Route::post('/store', 'RegistrationController@store')->name('Registration_store');
    Route::get('/edit/{id}', 'RegistrationController@edit')->name('Registration_edit');
    Route::get('/show/{id}', 'RegistrationController@show')->name('Registration_show');
    Route::post('/update', 'RegistrationController@update')->name('Registration_update');
    Route::get('/delete/{id}', 'RegistrationController@delete')->name('Registration_delete');
    Route::get('/verify/{id}/{code}', 'RegistrationController@activate')->name('Registration_activate');
});

Route::group(['prefix' => 'forgotpassword'], function () {
    Route::get('/', 'ForgotPasswordController@index')->name('forgotpassword');
    Route::get('/create', 'ForgotPasswordController@create')->name('forgotpassword_create');
    Route::post('/store', 'ForgotPasswordController@store')->name('forgotpassword_store');

    Route::post('/update', 'ForgotPasswordController@update')->name('forgotpassword_update');
    Route::get('/verify/{id}/{token}', 'ForgotPasswordController@activate')->name('forgotpassword_activate');
});



