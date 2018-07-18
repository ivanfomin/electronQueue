<?php



Route::get('/', 'TaskController@index');

Route::get('increment/{task}', 'TaskController@increment')->name('incr');

Route::get('/queue', 'LogController@show')->name('showQueue');

Route::get('/work', 'LogController@work')->name('working');
