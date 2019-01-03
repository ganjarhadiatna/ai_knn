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

//public
Route::get('/', 'MainController@index')->name('main-page');
Route::get('/create', 'MainController@create')->name('main-create');
Route::get('/edit/{id}', 'MainController@edit')->name('main-edit');
Route::get('/clasifications', 'MainController@cluster')->name('main-cluster');
Route::get('/result/{k}/{a}/{b}/{c}/{d}', 'MainController@result')->name('main-result');


//private
Route::post('/publish', 'MainController@publish')->name('main-publish');
Route::post('/put', 'MainController@put')->name('main-put');
Route::post('/remove', 'MainController@remove')->name('main-remove');
Route::post('/cluster_result', 'MainController@cluster_result')->name('main-class');