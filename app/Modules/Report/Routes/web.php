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

Route::group(['prefix' => 'report/accounttransection'], function () {

    Route::get('/{id?}', 'AccountTransection\WebController@index')->name('AccountTransection');
    Route::post('/SearchByDate', 'AccountTransection\WebController@SearchByDate')->name('AccountTransection_search');
    Route::get('/edit/{id}', 'AccountTransection\WebController@edit')->name('AccountTransection_edit');
    Route::get('/show/{id}', 'AccountTransection\WebController@show')->name('AccountTransection_show');
    Route::post('/update/{id}', 'AccountTransection\WebController@update')->name('AccountTransection_update');

});

Route::group(['prefix' => 'report/general/ledger'], function () {

    Route::get('/', 'Generalladger\WebController@index')->name('Generalladger');
    Route::post('/', 'Generalladger\WebController@SearchByDate')->name('Generalladger');
    Route::get('/edit/{id}', 'Generalladger\WebController@edit')->name('Generalladger_edit');
    Route::get('/show/{id}', 'Generalladger\WebController@show')->name('Generalladger_show');
    Route::post('/update/{id}', 'Generalladger\WebController@update')->name('Generalladger_update');

});

Route::group(['prefix' => 'report/profit/loss'], function () {

    Route::get('/', 'ProfitLoss\WebController@index')->name('ProfitLoss');
    Route::post('/', 'ProfitLoss\WebController@SearchByDate')->name('ProfitLoss_search');
    Route::get('/edit/{id}', 'ProfitLoss\WebController@edit')->name('ProfitLoss_edit');
    Route::get('/show/{id}', 'ProfitLoss\WebController@show')->name('ProfitLoss_show');
    Route::post('/update/{id}', 'ProfitLoss\WebController@update')->name('ProfitLoss_update');

});
