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
		 	array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),
		 	array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),
		 	array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),
		 	array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),
		 	array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop'),array('user_uid' => '100002914582171', 'body' => 'niiiinååååååniiiinåååå. im a cop siren'), 
		 	array('user_uid' => '100000301570580', 'body' => 'blöblöblö, jag är kalles syster'),
		 	array('user_uid' => '567247458', 'body' => 'im still cool woop woop')
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