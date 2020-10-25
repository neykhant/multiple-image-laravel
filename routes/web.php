<?php



Route::get('/', 'HomeController@index')->name('image.index');
Route::post('/', 'HomeController@store')->name('image.store');
Route::get('/delete/{id}', 'HomeController@destroy')->name('image.destroy');
Route::get('/download/{id}', 'HomeController@download')->name('image.download');


Auth::routes();

// Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'CheckAge']], function(){
//     Route::get('/a', function(){
//     return 'i am inside';
// });

// });

Route::get('/welcome', 'AdminController@index2')->name('admin.welcome');

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin' ], function(){
    Route::get('/home', 'AdminController@index');
    

});