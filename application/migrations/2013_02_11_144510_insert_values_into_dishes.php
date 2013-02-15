<?php

class Insert_Values_Into_Dishes {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('dishes')->insert(array(
				array('category_id' => 1, 'dish' => 'Fetaost & Oliver', 'price' => 35, 'description' => ''),
				array('category_id' => 1, 'dish' => 'Kycklingröra', 'price' => 35, 'description' => ''),
				array('category_id' => 2, 'dish' => 'Veckans rätter', 'price' => 75, 'description' => 'Veckans rätt inkl dryck, olika varje vecka'),
				array('category_id' => 2, 'dish' => 'Nudelsoppa', 'price' => 75, 'description' => 'Räkor, Chikuwa, Böngroddar, Salladskål'),
				array('category_id' => 3, 'dish' => 'Läsk', 'price' => 12, 'description' => ''),
				array('category_id' => 3, 'dish' => 'Juice', 'price' => 15, 'description' => ''),
				array('category_id' => 4, 'dish' => 'Kyckling', 'price' => 65, 'description' => ''),
				array('category_id' => 4, 'dish' => 'Tonfisk', 'price' => 69, 'description' => ''),
				array('category_id' => 5, 'dish' => 'Bit', 'price' => 49, 'description' => ''),
				array('category_id' => 5, 'dish' => 'Landgångar', 'price' => 75, 'description' => '')
			));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('dishes')->delete();
	}

}