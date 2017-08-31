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

Route::group(['prefix' => ''], function () {

	Route::get('/', 'WebController@index')->name('frontend');
    Route::get('/history', 'WebController@history')->name('history');
    Route::get('/fmessage', 'WebController@fmessage')->name('fmessage');
    Route::get('/mission_Vision', 'WebController@mission_Vision')->name('mission_Vision');
    Route::get('/academic_Council', 'WebController@academic_Council')->name('academic_Council');
    Route::get('/organogram', 'WebController@organogram')->name('organogram');
    Route::get('/ex_principle', 'WebController@ex_principle')->name('ex_principle');
    Route::get('/employee_information', 'WebController@employee_information')->name('employee_information');
    Route::get('/career', 'WebController@career')->name('career');
    Route::get('/academic_program', 'WebController@academic_program')->name('academic_program');
    Route::get('/code_conducts', 'WebController@code_conducts')->name('code_conducts');
    Route::get('/dress_code', 'WebController@dress_code')->name('dress_code');
    Route::get('/facility', 'WebController@facility')->name('facility');
    Route::get('/resident', 'WebController@resident')->name('resident');
    Route::get('/transport', 'WebController@transport')->name('transport');
    Route::get('/teachers', 'WebController@teachers')->name('teachers');
    Route::get('/students', 'WebController@students')->name('students');
    Route::get('/academic_calender', 'WebController@academic_calender')->name('academic_calender');
    Route::get('/curriculum', 'WebController@curriculum')->name('curriculum');
    Route::get('/class_routine', 'WebController@class_routine')->name('class_routine');
    Route::get('/exam_routine', 'WebController@exam_routine')->name('exam_routine');
    Route::get('/felibrary', 'WebController@felibrary')->name('felibrary');
    Route::get('/content_download', 'WebController@content_download')->name('content_download');
    Route::get('/publication', 'WebController@publication')->name('publication');
    Route::get('/co_curricular', 'WebController@co_curricular')->name('co_curricular');
    Route::get('/success_story', 'WebController@success_story')->name('success_story');
    Route::get('/fgallery', 'WebController@fgallery')->name('fgallery');
    Route::get('/internal_result', 'WebController@internal_result')->name('internal_result');
    Route::get('/public_exam_result', 'WebController@public_exam_result')->name('public_exam_result');
    Route::get('/result_download', 'WebController@result_download')->name('result_download');
    Route::get('/stestimonials', 'WebController@stestimonials')->name('stestimonials');
    Route::get('/stransfer_certificate', 'WebController@stransfer_certificate')->name('stransfer_certificate');
    Route::get('/scholarship', 'WebController@scholarship')->name('scholarship');
    Route::get('/fnotice', 'WebController@fnotice')->name('fnotice');
    Route::get('/fevents', 'WebController@fevents')->name('fevents');
    Route::get('/admission_information', 'WebController@admission_information')->name('admission_information');
    Route::get('/online_admission', 'WebController@online_admission')->name('online_admission');
    Route::get('/form_download', 'WebController@form_download')->name('form_download');
    Route::get('/exam_seat_plan', 'WebController@exam_seat_plan')->name('exam_seat_plan');
    Route::get('/admission_result', 'WebController@admission_result')->name('admission_result');
    Route::get('/contact', 'WebController@contact')->name('contact');
    // Route::get('/', function () {
    //     dd('This is the Frontend module index page. Build something great!');
    // });
});
