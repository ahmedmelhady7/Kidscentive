<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKidsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kids', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent1_id');
			$table->integer('parent2_id');
			$table->integer('points');
			$table->string('fullname');
			$table->string('username')->unique();
			$table->string('password');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kids');
	}

}
