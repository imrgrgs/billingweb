<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogchamadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logchamadas', function(Blueprint $table)
		{
			$table->integer('log_id', true);
			$table->dateTime('log_datahora')->default('0000-00-00 00:00:00')->index('log_datahora');
			$table->string('log_destino', 20)->default('')->index('log_destino');
			$table->text('log_texto', 16777215);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logchamadas');
	}

}
