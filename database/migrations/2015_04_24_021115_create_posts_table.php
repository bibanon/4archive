<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('chan_id');
			$table->integer('threads_id')->unsigned();
			$table->string('chan_image_name', 255)->nullable();
			$table->integer('image_size')->default(0);
            $table->string('image_dimensions', 20)->nullable();
            $table->string('thumb_dimensions', 20)->nullable();
			$table->string('image_url', 255)->nullable();
			$table->string('imgur_hash', 50)->nullable();
            $table->string('original_image_name', 800)->nullable();
			$table->string('subject', 255)->nullable();
			$table->string('name', 255)->default('Anonymous');
            $table->string('chan_user_id', 255)->nullable();
			$table->string('tripcode', 50)->nullable();
			$table->string('capcode', 50)->nullable();
            $table->datetime('chan_post_date');
			$table->text('body');
            $table->tinyInteger('available')->default(1);
            $table->string('md5', 255)->nullable();

			$table->foreign('threads_id')->references('id')->on('threads');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
