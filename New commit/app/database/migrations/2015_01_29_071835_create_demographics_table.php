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
			$table->string('first_name');
			$table->string('last_name');
			$table->string('cnic');
			$table->string('phon_no');
			$table->string('home_phon_no');
			$table->string('reference_phon_no');
			$table->string('email');
			$table->string('secret_question');
			$table->string('secret_answer');
			$table->string('address');
			$table->string('experience');
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
