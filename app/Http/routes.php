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
Route::get('/trip-itinary/{id}', 'TripController@itinary_index')->name('full_itenary');

//trip_search
Route::post('/trip-search', 'TripController@trip_search')->name('trip_search');

//Test check

Route::get('/check', 'TripController@test_check')->name('test_check');

//Search Ajax Routes
Route::post('/trip-search-filter', 'TripController@trip_filter')->name('trip_filter');

Route::post('/trip-search-filter-pagi', 'TripController@trip_filter_pagi')->name('trip_filter');

Route::get('/trip-search', 'TripController@trip_search_index')->name('trip_search_index');

//https://rest.gadventures.com/tour_dossiers/?geography.primary_country.name=China
Route::get('/country/trips/Belgium', 'TripController@trip_search_country')->name('country_trips');

Route::get('/flush2', function () {

$exitCode = Artisan::call('config:clear');
  		Cache::flush();
      dd('Cache cleared');
});