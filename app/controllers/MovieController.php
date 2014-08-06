<?php

class MovieController extends BaseController {

	public function index()
	{
		$Movies = Movie::orderBy('name', 'asc')->get();

		return View::make('admin.movies', array(
			'Movies' => $Movies
		));
	}

	public function edit($id)
	{
		$Movie = Movie::find($id);

		return View::make('admin.movieModal', array(
			'Movie' => $Movie
		))->render();
	}
}