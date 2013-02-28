<?php

class Rating extends Eloquent {

	public function users()
	{
		return $this->belongs_to('User');
	}
}