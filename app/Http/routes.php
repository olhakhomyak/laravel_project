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

Route::get('/', 'HomeController@welcome')->name('FirstPage');

Route::post('/', 'HomeController@welcome')->name('FirstPage');

Route::get('main', 'HomeController@main')->name('MainPage');

Route::get('collection', 'HomeController@collection')->name('Collection');

Route::get('rating', 'HomeController@rating')->name('Rating');

Route::get('upcoming', 'HomeController@upcoming')->name('Upcoming');

Route::auth();

Route::get('/home', 'HomeController@index')->name('Home');

Route::get('contact', 'HomeController@create')->name('contact');

Route::post('contact', 'HomeController@store')->name('contact_store');

Route::get('email-sent/{Feedback}', 'HomeController@emailSent')->name('user.email.show');