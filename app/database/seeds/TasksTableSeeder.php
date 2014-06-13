<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('tasks')->delete();
		  
		  $tasks  = array(
		  	array(
		  		'title' => 'Buy Milk',
		  		'creator_id' => 1,
		  		'assignee_id' => 1,
		  		'priority' => 'high',
		  		'points' => 100,
		  		'done' => false
			),
			array(
		  		'title' => 'Buy Butter',
		  		'creator_id' => 1,
		  		'assignee_id' => 1,
		  		'priority' => 'Medium',
		  		'points' => 100,
		  		'done' => true
			)
			
		  );
		  
		  DB::table('tasks')->insert($tasks); 
	}

}