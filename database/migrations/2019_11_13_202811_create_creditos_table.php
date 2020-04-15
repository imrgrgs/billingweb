<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditos', function(Blueprint $table)
		{
			$table->integer('crd_assinante_id')->unsigned()->default(0)->primary();
			$table->float('crd_saldo', 12, 4)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditos');
	}

}
