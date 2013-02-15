<?php

class Insert_Values_Into_Categories {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		 DB::table('categories')->insert(array(
		 	array('category' => 'Baguetter'), 
		 	array('category' => 'Varmrätter'),
		 	array('category' => 'Dryck'),
		 	array('category' => 'Salladsbar'),
		 	array('category' => 'Beställning av smörgåstårta'),
		 	array('category' => 'Övrigt')
		 	));
	}

	/**
	 * dude the changes to the database.
	 *
	 * @return void
	 */ 
	public function down()
	{
		DB::table('categories')->delete();
	}

}