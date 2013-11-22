<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table){
			$table->bigIncrements('id')->unsigned();
			$table->bigInteger('author')->index();
			$table->string('title', 100);
			$table->text('body');
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
		Schema::dropIfExists('posts');
	}

}