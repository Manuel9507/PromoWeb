<?php
/**
* 
*/
class UserLogin extends \BaseController
{
	
	public function user()
	{
		$userdata = array(
			'nombre'=> Input::get('nombre'),
			'password'=> Input::get('password')
		);
		
		if (Auth::attempt($userdata)) 
		{
			return View::make('hello');
		}
		else
		{
			return Redirect::to('/')->with('login_errors',true);
		}
	}
}
?>