<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCpamasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpamaster', function(Blueprint $table)
		{
			$table->increments('cma_id');
			$table->integer('cma_fornecedor_id')->unsigned()->default(0);
			$table->date('cma_data')->default('0000-00-00');
			$table->time('cma_hora')->default('00:00:00');
			$table->float('cma_valor', 10)->default(0.00);
			$table->char('cma_status', 1)->nullable();
			$table->date('cma_dataliberou')->nullable();
			$table->char('cma_tipo', 1)->default('');
			$table->string('cma_historico', 60)->default('');
			$table->string('cma_boleto', 20)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cpamaster');
	}

}
