<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNaotarifadostermTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('naotarifadosterm', function(Blueprint $table)
		{
			$table->increments('nao_id');
			$table->char('nao_destino', 20)->nullable();
			$table->integer('nao_fornecedor_id')->unsigned()->nullable();
			$table->integer('nao_terminacao_id')->unsigned()->nullable();
			$table->integer('nao_segundos')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('naotarifadosterm');
	}

}
