<?php

class Create_Categories_Table {    

	public function up()
    {
		Schema::create('categories', function($table) {
			$table->increments('id');
			$table->string('category');
	});

    }    

	public function down()
    {
		Schema::drop('categories');

    }

}