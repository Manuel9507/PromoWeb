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

//Route::post('login','UserLogin');
Route::group(array('before'=>'auth'),function()
{
Route::model('ads', 'Ad');
Route::model('users', 'User');
Route::bind('ads', function($value, $route) { return Ad::whereId($value)->first();});
Route::resource("ads", "AdsController");
Route::resource("users", "UsersController");

});