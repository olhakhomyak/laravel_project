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

Route::get('rating', 'EventsController@getEvents')->name('Rating');

Route::get('upcoming', 'HomeController@upcoming')->name('Upcoming');

Route::auth();

Route::get('/home', 'HomeController@index')->name('Home');

Route::get('contact', 'HomeController@create')->name('contact');

Route::post('contact', 'HomeController@store')->name('contact_store');

Route::get('email-sent/{Feedback}', 'HomeController@emailSent')->name('user.email.show');

Route::resource('posts', 'PostController');

Route::get('/posts/{postId}/destroy', 'PostController@destroy')->name('posts.delete')->middleware('admin');

Route::get('/language', 'LanguageController@chooser')->name('language-chooser');

Route::post('events/{eventId}/subscribe', 'EventsController@subscribeToEvent')->name('event.subscribe');

Route::get('admin/events/create', 'AdminController@createEvent')->name('admin.createEvent')->middleware('admin');

Route::get('admin/events/show-all-subscribers', 'EventsController@showAllSubscribers')->name('showAllSubscribers');

Route::post('admin/events/store', 'AdminController@storeEvent')->name('admin.storeEvent')->middleware('admin');