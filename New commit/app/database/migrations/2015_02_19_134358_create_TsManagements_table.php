<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTsManagementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TsManagements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->datetime('issue_date');
			$table->datetime('submition_date');
			$table->datetime('submition_date2');
			$table->string('created_by');
			$table->string('reviewed_by');
			$table->integer('ctivity_time_limit');
			$table->datetime('review_deadline');
			$table->datetime('review_deadline2');
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
		Schema::drop('TsManagements');
	}

}
