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


Route::group(['prefix' => 'gallery'], function(){
    Route::get('/', 'GalleryController@index')->name('gallery');
    Route::get('/create', 'GalleryController@create')->name('gallery_create');
    Route::post('/store', 'GalleryController@store')->name('gallery_store');
    Route::get('/edit/{id}', 'GalleryController@edit')->name('gallery_edit');
    Route::get('/show/{id}', 'GalleryController@show')->name('gallery_show');
    Route::post('/update', 'GalleryController@update')->name('gallery_update');
    Route::get('/delete/{id}', 'GalleryController@delete')->name('gallery_delete');
});

Route::group(['prefix' => 'gallery/category'], function(){
    Route::get('/', 'CategoryController@index')->name('Gallery_cat');
    Route::get('/create', 'CategoryController@create')->name('Gallery_cat_create');
    Route::post('/store', 'CategoryController@store')->name('Gallery_cat_store');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('Gallery_cat_edit');
    Route::get('/show/{id}', 'CategoryController@show')->name('Gallery_cat_show');
    Route::post('/update/{id}', 'CategoryController@update')->name('Gallery_cat_update');
    Route::get('/delete/{id}', 'CategoryController@delete')->name('Gallery_cat_delete');
});
