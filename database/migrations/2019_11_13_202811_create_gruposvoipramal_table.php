<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGruposvoipramalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gruposvoipramal', function(Blueprint $table)
		{
			$table->integer('grv_ramal_id', true)->comment('auto increment PK');
			$table->integer('grv_id')->comment('identificação da fila de atendimento');
			$table->integer('user_id')->comment('identificação do assinante, sua ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gruposvoipramal');
	}

}
