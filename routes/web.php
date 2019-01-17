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

Route::get('/', 'HomeController@index')->name('home');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('links', 'LinkController@index')->name('links.view');
Route::post('links', 'LinkController@create')->name('links.create');

