<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLicennsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('licennses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->string('trial_period')->nullable();
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
		Schema::drop('licennses');
	}

}
