<?php

class Remove_Ratings_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('ratings');
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('ratings', function($table){
			$table->increments('id');
			$table->string('facebook_id');
			$table->unique('facebook_id');
			$table->integer('value');
		});
	}

}