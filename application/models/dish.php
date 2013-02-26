<?php

class Dish extends Eloquent
{

	public static $timestamps = false;


	public function categories()
	{
		return $this->belongs_to('Category');
	}

} 


?>