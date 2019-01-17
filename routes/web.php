<?php

// Shortcut to get the login / register / logout routes
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Dashboard to show all links for the user
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

//Route::get('links', 'LinkController@index')->name('links.view');
Route::post('links', 'LinkController@create')->name('links.create');

// Route to view the links (decode the hash + redirect)
Route::get('/{link}', 'LinkController@show')->where('link','[0-9A-Za-z]{7}');

