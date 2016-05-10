<?php

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
|
|
*/

/** Web App Route **/

	Route::get('/', function () {
		    return view('app/home/index');
		});
	
	Route::get('/about', function () {
		    return view('app/about/index');
		});
	
	Route::get('/news', function () {
		    return view('app/blog/index');
		});
	
	Route::get('/faq', function () {
		    return view('app/faq/index');
		});
	
	Route::get('/interpreting', function () {
		    return view('app/interpreting/index');
		});
	
	Route::get('/translation', function () {
		    return view('app/translation/index');
		});
	
	Route::get('/contact', function () {
		    return view('app/contact/index');
		});
	
/** END Web App Route **/	