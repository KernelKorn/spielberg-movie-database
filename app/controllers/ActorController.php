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

	public function adminIndex()
	{
		$Actors = Actor::orderBy('name', 'asc')->get();

		return View::make('admin.actors', array(
			'Actors' => $Actors
		));
	}

	public function edit($id)
	{
		$Actor = Actor::find($id);

		return View::make('admin.editModal', array(
			'Actor' => $Actor
		))->render();
	}

}