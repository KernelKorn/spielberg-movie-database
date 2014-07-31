<?php

class Movie extends Eloquent
{
	public function Actors()
	{
		return $this->belongsToMany('Actor', 'characters', 'movie_id', 'actor_id')
			->withPivot('character_name');
	}
}