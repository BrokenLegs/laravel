<?php

class Insert_Values_Into_Ratings {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('ratings')->insert(array(
		 	array('facebook_id' => '100002914582171', 'value' => '5'), 
		 	array('facebook_id' => '100002914582172', 'value' => '3'), 
		 	array('facebook_id' => '100002914582173', 'value' => '7'), 
		 	array('facebook_id' => '100002914582174', 'value' => '9'), 
		 	array('facebook_id' => '100002914582175', 'value' => '10'), 
		 	array('facebook_id' => '100002914582176', 'value' => '1'), 
		 	array('facebook_id' => '100002914582177', 'value' => '4'), 
		 	array('facebook_id' => '100002914582178', 'value' => '5'), 
		 	array('facebook_id' => '100002914582179', 'value' => '6'), 
		 	array('facebook_id' => '100002914582180', 'value' => '7'), 
		 	array('facebook_id' => '100002914582181', 'value' => '5')
		 	));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('comments')->delete();
	}

}