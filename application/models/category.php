<?php

class Category extends Eloquent
{
	public static $timestamps = false;


	public function dishes()
	{
		return $this->has_many('Dish', 'category_id');
	}

}


?>