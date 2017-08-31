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

Route::group(['prefix' => 'applications/type'], function () {

    Route::get('/', 'Type\ApplicationTypeController@index')->name('application_type');
    Route::get('/create', 'Type\ApplicationTypeController@create')->name('application_type_create');
    Route::post('/store', 'Type\ApplicationTypeController@store')->name('application_type_store');
    Route::get('/edit/{id}', 'Type\ApplicationTypeController@edit')->name('application_type_edit');
    Route::get('/show/{id}', 'Type\ApplicationTypeController@show')->name('application_type_show');
    Route::post('/update/{id}', 'Type\ApplicationTypeController@update')->name('application_type_update');
    Route::get('/destroy/{id}', 'Type\ApplicationTypeController@destroy')->name('application_type_delete');
});

Route::group(['prefix' => 'applications'], function () {

    Route::get('/', 'Application\ApplicationController@index')->name('application');
    Route::get('/create', 'Application\ApplicationController@create')->name('application_create');
    Route::post('/store', 'Application\ApplicationController@store')->name('application_store');
    Route::get('/edit/{id}', 'Application\ApplicationController@edit')->name('application_edit');
    Route::get('/show/{id}', 'Application\ApplicationController@show')->name('application_show');
    Route::post('/update/{id}', 'Application\ApplicationController@update')->name('application_update');
    Route::get('/destroy/{id}', 'Application\ApplicationController@destroy')->name('application_delete');
    Route::get('/section', 'Application\ApplicationController@section')->name('application_section');
});
