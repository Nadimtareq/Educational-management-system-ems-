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

Route::group(['prefix' => '/dynamicpage/page'], function(){
    Route::get('/', 'PageController@index')->name('page');
    Route::get('/create', 'PageController@create')->name('page_create');
    Route::post('/store', 'PageController@store')->name('page_store');
    Route::get('/edit/{id}', 'PageController@edit')->name('page_edit');
    Route::get('/show/{id}', 'PageController@show')->name('page_show');
    Route::post('/update/{id}', 'PageController@update')->name('page_update');
    Route::get('/delete/{id}', 'PageController@delete')->name('page_delete');
});

Route::group(['prefix' => '/dynamicpage/pagedetail'], function(){
    Route::get('/', 'PagedetailController@index')->name('page_detail');
    Route::get('/create', 'PagedetailController@create')->name('page_detail_create');
    Route::post('/store', 'PagedetailController@store')->name('page_detail_store');
    Route::get('/edit/{id}', 'PagedetailController@edit')->name('page_detail_edit');
    Route::get('/show/{id}', 'PagedetailController@show')->name('page_detail_show');
    Route::post('/update/{id}', 'PagedetailController@update')->name('page_detail_update');
    Route::get('/delete/{id}', 'PagedetailController@delete')->name('page_detail_delete');
});


Route::group(['prefix' => 'contactinfo'], function(){
    Route::get('/', 'ContactinfoController@index')->name('contact_info');
    Route::get('/create', 'ContactinfoController@create')->name('contact_info_create');
    Route::post('/store', 'ContactinfoController@store')->name('contact_info_store');

});