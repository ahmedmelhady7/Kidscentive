<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ParentsTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('parents')->delete();
		  
		  $parents  = array(
		  	array(
		  		'fullname' => 'Jacob',
		  		'username' => 'jacob',
		  		'email' => 'jacob@gmail.com',
		  		'password' => Hash::make('123456'),
		  		'role' => 'father'
			),
			array(
		  		'fullname' => 'Mary',
		  		'username' => 'mary',
		  		'email' => 'mary@gmail.com',
		  		'password' => Hash::make('123456'),
		  		'role' => 'mother'
			)
		  );
		  
		  DB::table('parents')->insert($parents); 
	}

}