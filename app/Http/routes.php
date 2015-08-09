<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Access to the main site

Route::get('/', function()
{

	if(Auth::check()){

		return redirect('dashboard');

	}else {

		return redirect('auth/login');

	}

});

// Access to the dashboard

Route::get('dashboard', function () {
    return view('dashboard');
});

// Authentication routes...

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('login', function()
	{
		return view('auth.login');
	}
);

// Registration routes...

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');

// People routes...

Route::get('people', 'PeopleController@index');
Route::get('people/create', 'PeopleController@create');
Route::get('people/list', 'PeopleController@getList');

Route::post('people', 'PeopleController@store');


// Locale routes...
Route::get('lang/{lang}', 'LanguageController@switchLang');

