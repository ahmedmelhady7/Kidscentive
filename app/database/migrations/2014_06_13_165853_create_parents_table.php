<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullname');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('username')->unique();
			$table->string('role');
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
		Schema::drop('parents');
	}

}
