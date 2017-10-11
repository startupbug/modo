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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'AuthController@loginIndex')->name('login');

Route::get('/signup', 'AuthController@signupIndex')->name('signup');


Route::get('/logout', 'AuthController@logout')->name('logout');

/* Normal Authentication */

Route::post('/register', 'AuthController@register')->name('register');
Route::post('/login', 'AuthController@login_post')->name('login_post');
/* Facebook Socialite */

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

/* Trip Controller */
Route::get('/trip/{id}', 'TripController@index')->name('single_trip_view');