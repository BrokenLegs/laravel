<?php

class Create_Weekly_Table {    

	public function up()
    {
		Schema::create('weekly', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('price');
			$table->string('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('weekly');

    }

}