<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueueTableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queue_table', function(Blueprint $table)
		{
			$table->string('name', 128)->default('')->primary();
			$table->string('musiconhold', 128)->nullable();
			$table->string('announce', 128)->nullable();
			$table->string('context', 128)->nullable();
			$table->integer('timeout')->nullable();
			$table->boolean('monitor_join')->nullable();
			$table->string('monitor_format', 128)->nullable();
			$table->string('queue_youarenext', 128)->nullable();
			$table->string('queue_thereare', 128)->nullable();
			$table->string('queue_callswaiting', 128)->nullable();
			$table->string('queue_holdtime', 128)->nullable();
			$table->string('queue_minutes', 128)->nullable();
			$table->string('queue_seconds', 128)->nullable();
			$table->string('queue_lessthan', 128)->nullable();
			$table->string('queue_thankyou', 128)->nullable();
			$table->string('queue_reporthold', 128)->nullable();
			$table->integer('announce_frequency')->nullable();
			$table->integer('announce_round_seconds')->nullable();
			$table->string('announce_holdtime', 128)->nullable();
			$table->integer('retry')->nullable();
			$table->integer('wrapuptime')->nullable();
			$table->integer('maxlen')->nullable();
			$table->integer('servicelevel')->nullable();
			$table->string('strategy', 128)->nullable();
			$table->string('joinempty', 128)->nullable();
			$table->string('leavewhenempty', 128)->nullable();
			$table->boolean('eventmemberstatus')->nullable();
			$table->boolean('eventwhencalled')->nullable();
			$table->boolean('reportholdtime')->nullable();
			$table->integer('memberdelay')->nullable();
			$table->integer('weight')->nullable();
			$table->boolean('timeoutrestart')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('queue_table');
	}

}
