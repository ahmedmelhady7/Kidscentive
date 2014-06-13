<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class KidsTableSeeder extends Seeder {

	public function run()
	{
		  DB::table('kids')->delete();
		  
		  $kids  = array(
		  	array(
		  		'fullname' => 'Jonah',
		  		'username' => 'jonah',
		  		'password' => Hash::make('123456'),
				'parent1_id' => '1',
				'parent2_id' => '2',
				'points' => '0'
			)
		  );
		  
		  DB::table('kids')->insert($kids);
		  
	}

}