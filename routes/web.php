<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**************************************************
					
	PORTFOLIO

**************************************************/

Route::get('/', 'HomeController@index');

Route::get('/portfolio/ervaring/{name}', 'PortfolioController@experiences');
Route::get('/portfolio/diensten/{name}', 'PortfolioController@services');
Route::get('/portfolio/vaardigheden/{name}', 'PortfolioController@skills');
Route::get('/portfolio/products/{name}', 'PortfolioController@products');

Route::get('/portfolio', 'PortfolioController@index');

Route::get('/profiel', function () {
	return view('portfolio/profile');
});

/**************************************************
					
	NOTITIE APP

**************************************************/

Route::get('/notities', 'NoteController@index');

/**************************************************
					
	ERROR PAGINAS

**************************************************/

Route::get('/404', function () {
	return view('errors/404');
});

Route::get('/503', function () {
	return view('errors/503');
});