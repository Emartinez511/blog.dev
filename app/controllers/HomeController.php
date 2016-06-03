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
		return View::make('hello');
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

}
