<?php

class Create_Table_Users{    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('uid');
			$table->string('name');
			$table->string('image');
			$table->string('facebooklink');
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}