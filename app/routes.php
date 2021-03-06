<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');


});
Route::get('login', array('uses' => 'HomeController@showLogin'));

Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));


Route::model('ads_invitado', 'Ad');
Route::bind('ads_invitado', function($value, $route) { return Ad::whereId($value)->first();});
Route::resource("ads_invitado", "AdsController");

//Route::post('login','UserLogin');
Route::group(array('before'=>'auth'),function()
{
Route::model('ads', 'Ad');
Route::model('users', 'User');

Route::bind('ads', function($value, $route) { return Ad::whereId($value)->first();});
Route::resource("ads", "AdsController");

Route::bind('users', function($value, $route) { return User::whereId($value)->first();});
Route::resource("users", "UsersController");
});