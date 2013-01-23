<?php

class Create_Weeklies_Table {    

	public function up()
    {
		Schema::create('weeklies', function($table) {
			$table->increments('id');
			$table->string('day');
			$table->string('name');
			$table->string('description');
			$table->integer('price');
	});

    }    

	public function down()
    {
		Schema::drop('weeklies');

    }

}