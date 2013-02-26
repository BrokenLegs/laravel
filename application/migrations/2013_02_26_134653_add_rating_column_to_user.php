<?php

class Add_Rating_Column_To_User {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table){
			$table->integer('rating');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table){
			$table->drop_column('rating');
		});
	}

}