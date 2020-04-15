<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAudiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('audios', function(Blueprint $table)
		{
			$table->increments('aud_id');
			$table->date('aud_data')->nullable();
			$table->time('aud_hora')->nullable();
			$table->char('aud_assinante', 15)->nullable();
			$table->char('aud_destino', 20)->nullable();
			$table->integer('aud_tempo')->nullable();
			$table->char('aud_arquivo', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('audios');
	}

}
