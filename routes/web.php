<?php

Route::get('/', 'productController@index');
Route::get('/home', 'productController@index');
Route::get('/home', 'productController@create');
Route::post('/home', 'productController@store');

Route::get('/edit/{id}', 'productController@edit');
Route::post('/edit/{id}', 'productController@update');

Route::get('/del/{id}', 'productController@destroy');