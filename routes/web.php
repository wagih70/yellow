<?php


Auth::routes();
Route::get('/', 'CompanyController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/addcompany', 'CompanyController@create');
    Route::post('/', 'CompanyController@store'); 
    Route::get('/getareas/{id}', 'CompanyController@getAreas');    
    Route::get('/{id}/edit', 'CompanyController@edit');
    Route::put('/{id}', 'CompanyController@update');
    Route::delete('/{id}', 'CompanyController@destroy');
    Route::get('/addcategory', 'CategoryController@create');
    Route::post('/addcategory', 'CategoryController@store');
});




