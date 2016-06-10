<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('index');
	}

	public function rollDice($guess)
	{
		$random = mt_rand( 1 , 6);
		if ($random == $guess) {
				$correct = "you win";
		} else {
				$correct = "You lose";
		}
		$data = array('random' => $random, 'guess' => $guess, 'correct' => $correct);
		return View::make('roll-dice')->with($data);
	}

public function resume()
{
	return View::make('resume');
}

public function portfolio()
{
	return View::make('portfolio');
}

public function showLogin()
{
	return View::make('login');
}

public function doLogin()
{
	$validator = Validator::make(Input::all(), User::$rules);
	if ($validator->fails()) {
		Session::flash('errorMessage', 'Something went wrong');
		return Redirect::back()->withInput(Input::except('password'))->withErrors($validator);
	} else {
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			// user is logged in
			Session::flash('successMessage', 'Login Successful');
			return Redirect::intended('/posts');
		} else {
			// user not logged in
			Session::flash('errorMessage', 'Wrong username/password');
			return Redirect::back();
		}
	}
}
public function doLogout()
{
	Auth::logout();
	Session::flash('message', 'Logout Successful');
	return Redirect::back();
}

}
