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

Route::post('login','UserLogin');

Route::model('ads', 'Ad');
Route::bind('ads', function($value, $route) { return Ad::whereId($value)->first();});
Route::resource("ads", "AdsController");

//Route::get('login2',array('before'=>'auth.basic',function()
//{
//	return View::make('hello');
//}));