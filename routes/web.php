<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'HomepageController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::post('profile-update', 'HomeRegController@profile_update')->name('profile_update');
    Route::resource('mydevice', 'DeviceController');
    Route::get('add-device', 'HomeRegController@adddevice')->name('add-device');
    Route::get('address', 'HomeRegController@address')->name('address');
    Route::post('update_address', 'HomeRegController@address_update')->name('update_address');
});

Route::get('/setup', function () {
    return view('pages.setup');
});

Route::resource('/home-reg', 'HomeRegController');
Route::post('subscribe', 'HomepageController@subscribe')->name('subscribe');
Route::get('/nextpage', 'HomeRegController@index2');
Auth::routes();

Route::get('/close/{id}', 'TicketController@ticketclose');

Route::resource('/ticket','TicketController');

Route::post('contacted','HomePageController@contacted');

Route::get('/features', function () {
    return view('pages.features');
});
Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
