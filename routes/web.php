<?php

Route::get('/', 'ChordController@index');

// webtools
Route::get('/webtools', 'WebtoolsController@index');

Route::get('/webtools/composer', 'WebtoolsController@composer');
Route::post('/webtools/composer', 'WebtoolsController@store');
Route::get('/webtools/composer/create', 'WebtoolsController@create');
Route::get('/webtools/composer/{id}', 'WebtoolsController@show');
Route::get('/webtools/composer/{id}/edit', 'WebtoolsController@edit');
Route::put('/webtools/composer/{id}', 'WebtoolsController@update');

