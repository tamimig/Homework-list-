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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/create', 'TestsController@create')->name('test.create');
Route::post('/test/store', 'TestsController@store')->name('test.store');
Route::get('/tests', 'TestsController@index')->name('tests');

Route::get('/test/edit/{id}', 'TestsController@edit')->name('test.edit');
Route::get('/test/destroy/{id}', 'TestsController@destroy')->name('test.delete');

Route::post('/test.update/{id}', 'TestsController@update')->name('test.update');
