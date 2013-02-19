<?php

class Insert_Values_Into_Comments {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		 DB::table('comments')->insert(array(
		 	array('user_uid' => '100002914582171', 'body' => 'Im a comment im a comment im a comment, Im a comment im a comment im a comment, Im a comment im a comment im a comment, ohh ohh ohh im a comment'), 
		 	array('user_uid' => '100002914582171', 'body' => 'Kung fu panda...'),
		 	array('user_uid' => '567247458', 'body' => 'Woop woop woop eeeeeeeeeeeeeeeyyyy')
		 	));
		//
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		DB::table('comments')->delete();
	}

}