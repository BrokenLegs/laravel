<?php

class User extends Eloquent 
{
	public static $timestamps = false;

	public function comments()
	{
		return $this->has_many('Comment');
	}

}