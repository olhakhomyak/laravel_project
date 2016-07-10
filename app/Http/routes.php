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

Route::get('/', 'WelcomeController@index') -> name('FirstPage');

Route::post('/', 'WelcomeController@index') -> name('FirstPage');

Route::post('authentication', 'AuthController@index') -> name('Auth');

Route::get('main', 'MainController@index') -> name('MainPage');

Route::get('collection', 'CollectionController@index') -> name('Collection');

Route::get('rating', 'RatingController@index') -> name('Rating');

Route::get('upcoming', 'UpcomingController@index') -> name('Upcoming');

Route::get('about', 'AboutController@index') -> name('About');