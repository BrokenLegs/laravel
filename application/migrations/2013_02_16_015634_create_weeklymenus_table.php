<?php

class Create_Weeklymenus_Table {    

	public function up()
    {
		Schema::create('weeklymenus', function($table) {
			$table->increments('id');
			$table->string('week');
			$table->string('name1');
			$table->string('name2');
			$table->string('description1');
			$table->string('description2');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('weeklymenus');

    }

}