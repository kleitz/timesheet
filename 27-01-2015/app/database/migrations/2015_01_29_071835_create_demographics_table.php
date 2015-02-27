<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemographicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demographics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('userName');
			$table->string('lName');
			$table->string('city');
			$table->string('country');
			$table->string('phone');
			$table->string('answer');
			$table->string('email');
			$table->string('password');
			$table->string('repass');
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
		Schema::drop('demographics');
	}

}
