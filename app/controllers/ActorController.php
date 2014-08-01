<?php

class ActorController extends BaseController {

	public function index($id)
	{
		$Actor = Actor::find($id);

		return View::make('actors.index', array(
			'Actor' => $Actor
		));
	}

	public function search($key)
	{
		$Actors = Actor::orderBy('name', 'asc')
			->where('name', 'LIKE', '%' . $key . '%')->get();

		return View::make('actors.search', array(
			'Actors' => $Actors
		));
	}
}