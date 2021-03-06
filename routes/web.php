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



Auth::routes();

Route::get('/', 'MainController@index')->name('welcome');
Route::get('profile', 'MainController@profile')->name('profile');
Route::get('setting', 'MainController@setting')->name('setting');
Route::get('buyrobots', 'MainController@buyrobots')->name('buyrobots');
Route::get('store', 'MainController@store')->name('store');
Route::get('market', 'MainController@market')->name('market');
Route::get('exchange', 'MainController@exchange')->name('exchange');
Route::get('partners', 'MainController@partners')->name('partners');
