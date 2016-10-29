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

Route::get('/', 'HomeController@showWelcome');
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');

Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');



Route::get('/rolldice/{guess}', 'HomeController@rollDice');

Route::resource('posts', 'PostsController');

Route::get('/logout', 'HomeController@doLogout');

Route::get('orm-test', function ()
{
	$post = Post::find(9);
	$post->delete();
});
