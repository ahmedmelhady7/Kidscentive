<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent1_id');
			$table->integer('parent2_id');
			$table->string('email')->unique();
			$table->integer('points');
			$table->string('fullname');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('role');
			$table->string('type');
			$table->string('remember_token');
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
		Schema::drop('users');
	}

}
