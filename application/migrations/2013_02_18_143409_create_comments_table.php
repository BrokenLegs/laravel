<?php

class Create_Comments_Table {    

	public function up()
    {
		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->string('user_uid');
			$table->string('body');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('comments');

    }

}