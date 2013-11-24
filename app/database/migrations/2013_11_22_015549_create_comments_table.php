<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table){
			$table->bigIncrements('id')->unsigned();
			$table->bigInteger('post')->index();
			$table->bigInteger('user')->index();
			$table->text('comment');
			$table->dateTime('created_at')->index();
			$table->dateTime('updated_at');
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
		Schema::dropIfExists('comments');
	}

}