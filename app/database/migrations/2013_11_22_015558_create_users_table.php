<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->bigIncrements('id')->unsigned();
			$table->string('username', 50)->unique();
			$table->string('password', 100);
			$table->string('name', 100);
			$table->string('email', 100)->index();
			$table->enum('type', array('admin', 'author', 'user'))->index();
			$table->dateTime('created_at')->index();
			$table->dateTime('updated_at')->index();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}