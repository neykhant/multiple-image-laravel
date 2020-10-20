<?php

Route::get('/', 'HomeController@index')->name('image.index');
Route::post('/', 'HomeController@store')->name('image.store');
Route::get('/delete/{id}', 'HomeController@destroy')->name('image.destroy');
Route::get('/download/{id}', 'HomeController@download')->name('image.download');


Auth::routes();

