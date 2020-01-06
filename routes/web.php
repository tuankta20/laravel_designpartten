<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::prefix('cities')->group(function (){
    Route::get('/','CityController@index')->name('cities');
    Route::get('create','CityController@create')->name('cities.create');
    Route::post('store','CityController@store')->name('cities.store');
    Route::get('edit/{id}','CityController@edit')->name('cities.edit');
    Route::post('update/{id}','CityController@update')->name('cities.update');
    Route::get('destroy/{id}','CityController@destroy')->name('cities.destroy');
});
