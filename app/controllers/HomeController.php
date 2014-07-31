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

	public function index()
	{
		$Movies = Movie::with('Actors')->orderBy('name', 'asc')->get();

		return View::make('index', array(
			'Movies' => $Movies
		));
	}

	public function movieIndex($id)
	{
		$Movies = Movie::find($id);

		return View::make('index', array(
			'Movies' => $Movies
		))->render();
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
