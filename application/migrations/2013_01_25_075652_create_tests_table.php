<?php

class Create_Tests_Table {    

	public function up()
    {
		Schema::create('tests', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description');
	});

    }    

	public function down()
    {
		Schema::drop('tests');

    }

}