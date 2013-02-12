<?php

class Create_Dishes_Table {    

	public function up()
    {
		Schema::create('dishes', function($table) {
			$table->increments('id');
			$table->string('dish');
			$table->string('description');
			$table->integer('price');
			$table->integer('category_id');
	});

    }    

	public function down()
    {
		Schema::drop('dishes');

    }

}