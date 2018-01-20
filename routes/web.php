<?php

Route::get('/', [
	'uses' => 'PortfolioController@index',
	'as' => '/'
]);

Route::get('/contact', [
	'uses' => 'PortfolioController@contact',
	'as' => 'contact'
]);

Route::get('/about', [
	'uses' => 'PortfolioController@about',
	'as' => 'about'
]);

Route::get('/gallery', [
	'uses' => 'PortfolioController@gallery',
	'as' => 'gallery'
]);
