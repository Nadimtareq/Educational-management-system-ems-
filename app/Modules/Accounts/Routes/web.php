<?php
use App\Model\Account\AccountType;
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

Route::group(['prefix' => 'accounts/ledger'], function () {
    Route::get('/', 'ledger\AccountTypeController@index')->name('AccountType');
    Route::get('/create', 'ledger\AccountTypeController@create')->name('AccountType_create');
    Route::post('/store', 'ledger\AccountTypeController@store')->name('AccountType_store');
    Route::get('/edit/{id}', 'ledger\AccountTypeController@edit')->name('AccountType_edit');
    Route::get('/show/{id}', 'ledger\AccountTypeController@show')->name('AccountType_show');
    Route::post('/update/{id}', 'ledger\AccountTypeController@update')->name('AccountType_update');
    Route::get('/destroy/{id}', 'ledger\AccountTypeController@destroy')->name('AccountType_delete');

});

Route::group(['prefix' => 'accounts/dailyaccounts'], function () {
    Route::get('/', 'dailyaccount\WebController@index')->name('dailyaccounts');
    Route::post('/', 'dailyaccount\WebController@SearchByDate')->name('dailyaccounts');
    Route::get('/create', 'dailyaccount\WebController@create')->name('dailyaccounts_create');
    Route::post('/store', 'dailyaccount\WebController@store')->name('dailyaccounts_store');
    Route::get('/edit/{id}', 'dailyaccount\WebController@edit')->name('dailyaccounts_edit');
    Route::get('/show/{id}', 'dailyaccount\WebController@show')->name('dailyaccounts_show');
    Route::post('/update/{id}', 'dailyaccount\WebController@update')->name('dailyaccounts_update');
    Route::get('/destroy/{id}', 'dailyaccount\WebController@destroy')->name('dailyaccounts_delete');
    Route::get('/getsingleuser', 'dailyaccount\WebController@getsingleuser')->name('dailyaccounts_singleuser');

});
