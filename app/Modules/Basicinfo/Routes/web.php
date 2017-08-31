<?php



Route::group(['prefix' => '/basicinfo/class'], function () {
    Route::get('/', 'classController@index')->name('class');
    Route::get('/create', 'classController@create')->name('class_create');
    Route::post('/store', 'classController@store')->name('class_store');
    Route::get('/edit/{id}', 'classController@edit')->name('class_edit');
    Route::get('/show/{id}', 'classController@show')->name('class_show');
    Route::post('/update/{id}', 'classController@update')->name('class_update');
    Route::get('/delete/{id}', 'classController@delete')->name('class_delete');

});

Route::group(['prefix' => '/basicinfo/session'], function () {
    Route::get('/', 'sessionController@index')->name('session');
    Route::get('/create', 'sessionController@create')->name('session_create');
    Route::post('/store', 'sessionController@store')->name('session_store');
    Route::get('/edit/{id}', 'sessionController@edit')->name('session_edit');
    Route::get('/show/{id}', 'sessionController@show')->name('session_show');
    Route::post('/update/{id}', 'sessionController@update')->name('session_update');
    Route::get('/delete/{id}', 'sessionController@delete')->name('session_delete');

});

Route::group(['prefix' => '/basicinfo/term'], function () {
    Route::get('/', 'termController@index')->name('term');
    Route::get('/create', 'termController@create')->name('term_create');
    Route::post('/store', 'termController@store')->name('term_store');
    Route::get('/edit/{id}', 'termController@edit')->name('term_edit');
    Route::get('/show/{id}', 'termController@show')->name('term_show');
    Route::post('/update/{id}', 'termController@update')->name('term_update');
    Route::get('/delete/{id}', 'termController@delete')->name('term_delete');

});

Route::group(['prefix' => '/basicinfo/section'], function () {
    Route::get('/', 'sectionController@index')->name('section');
    Route::get('/create', 'sectionController@create')->name('section_create');
    Route::post('/store', 'sectionController@store')->name('section_store');
    Route::get('/edit/{id}', 'sectionController@edit')->name('section_edit');
    Route::get('/show/{id}', 'sectionController@show')->name('section_show');
    Route::post('/update/{id}', 'sectionController@update')->name('section_update');
    Route::get('/delete/{id}', 'sectionController@delete')->name('section_delete');

});

Route::group(['prefix' => '/basicinfo/subject'], function () {
    Route::get('/', 'subjectController@index')->name('subject');
    Route::get('/create', 'subjectController@create')->name('subject_create');
    Route::post('/store', 'subjectController@store')->name('subject_store');
    Route::get('/edit/{id}', 'subjectController@edit')->name('subject_edit');
    Route::get('/show/{id}', 'subjectController@show')->name('subject_show');
    Route::post('/update/{id}', 'subjectController@update')->name('subject_update');
    Route::get('/delete/{id}', 'subjectController@delete')->name('subject_delete');

});

Route::group(['prefix' => '/basicinfo/exam'], function () {
    Route::get('/', 'examController@index')->name('exam');
    Route::get('/create', 'examController@create')->name('exam_create');
    Route::post('/store', 'examController@store')->name('exam_store');
    Route::get('/edit/{id}', 'examController@edit')->name('exam_edit');
    Route::get('/show/{id}', 'examController@show')->name('exam_show');
    Route::post('/update/{id}', 'examController@update')->name('exam_update');
    Route::get('/delete/{id}', 'examController@delete')->name('exam_delete');

});


Route::group(['prefix' => '/basicinfo/cteacher'], function () {
    Route::get('/', 'cteacherController@index')->name('cteacher');
    Route::get('/create', 'cteacherController@create')->name('cteacher_create');
    Route::post('/store', 'cteacherController@store')->name('cteacher_store');
    Route::get('/edit/{id}', 'cteacherController@edit')->name('cteacher_edit');
    Route::get('/show/{id}', 'cteacherController@show')->name('cteacher_show');
    Route::post('/update/{id}', 'cteacherController@update')->name('cteacher_update');
    Route::get('/delete/{id}', 'cteacherController@delete')->name('cteacher_delete');

});




