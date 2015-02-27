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
			$table->string('user_name');
			$table->string('email');
			$table->string('password');
			$table->string('designation');
			$table->string('organization');
			$table->string('code');
			$table->string('skills');
			$table->string('remember_token');
			$table->string('address');
			$table->string('active');
			$table->integer('report_to');
			$table->string('role');
			$table->string('created_by');
			$table->string('updated_by');
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
