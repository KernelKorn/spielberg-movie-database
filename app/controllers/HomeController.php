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

	public function index($id = 1)
	{
		$Movies = Movie::with('Actors')->orderBy('name', 'asc')->get();
		$Movie = Movie::find($id);

		return View::make('index', array(
			'Movies' => $Movies,
			'Movie' => $Movie
		));
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
