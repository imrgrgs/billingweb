<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoiptovoipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voiptovoip', function(Blueprint $table)
		{
			$table->increments('vtov_id');
			$table->char('vtov_origem', 15)->nullable();
			$table->char('vtov_destino', 15)->nullable();
			$table->integer('vtov_representante_id')->unsigned()->nullable();
			$table->integer('vtov_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('voiptovoip');
	}

}
