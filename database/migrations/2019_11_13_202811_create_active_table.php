<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActiveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('active', function(Blueprint $table)
		{
			$table->bigInteger('act_id', true)->unsigned();
			$table->char('act_origem', 50)->nullable();
			$table->char('act_destino', 50)->nullable();
			$table->char('act_usuario', 50)->nullable();
			$table->char('act_contexto', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('active');
	}

}
