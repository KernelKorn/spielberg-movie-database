<?php

class Actor extends Eloquent
{
	public function Movies()
	{
		return $this->belongsToMany('Movie', 'characters', 'actor_id', 'movie_id')
			->withPivot('character_name');
	}
}