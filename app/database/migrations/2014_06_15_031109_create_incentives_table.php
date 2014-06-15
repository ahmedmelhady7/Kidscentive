<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncentivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incentives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('worth');
			$table->boolean('purchased');
			$table->integer('purchaser_id');
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
		Schema::drop('incentives');
	}

}
