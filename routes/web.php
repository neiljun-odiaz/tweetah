<?php

// Auth::loginUsingId(1);

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

Auth::routes();

Route::get('/', 'TweetController@home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('tweet','TweetController');

    Route::get('profile','UserController@show');
    Route::post('profile/update','UserController@update');
});
