<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('thread_id');
			$table->string('board', 10);
            $table->timestamp('archive_date');
            $table->timestamp('update_date');
			$table->string('user_ips', 255);
            $table->integer('times_updated')->default(0);       // used to be updated_num     
			$table->integer('views')->default(0);
			$table->string('admin_note', 255)->nullable();
			$table->string('secret', 8);
            $table->tinyInteger('available')->default(1);
            $table->tinyInteger('alive')->default(1);
			$table->string('takedown_reason', 255)->nullable();
            $table->tinyInteger('busy')->default(0);
			$table->tinyInteger('tweeted')->default(0);
            $table->tinyInteger('shown')->default(1);
            
            //$table->softDeletes();
			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('threads');
	}

}
