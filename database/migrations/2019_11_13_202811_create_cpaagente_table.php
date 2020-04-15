<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCpaagenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpaagente', function(Blueprint $table)
		{
			$table->increments('cpa_id');
			$table->integer('cpa_agente_id')->unsigned()->nullable();
			$table->date('cpa_data')->nullable();
			$table->time('cpa_hora')->nullable();
			$table->float('cpa_valor', 10)->nullable();
			$table->char('cpa_status', 1)->nullable();
			$table->date('cpa_dataliberou')->nullable();
			$table->char('cpa_tipo', 1)->nullable();
			$table->string('cpa_historico', 80)->nullable();
			$table->char('cpa_boleto', 20)->nullable();
			$table->float('cpa_saldoanterior_rev', 10)->nullable();
			$table->string('cpa_comprovacao', 1)->default('p');
			$table->integer('cpa_estorno_id')->nullable()->default(0)->comment('Se cpa_tipo = \'c\' então o id do estorno aponta para a transação de estorno(o débito gerado)Se cpa_tipo = \'d\' então o id do estorno aponta para a transação de compra(o crédito que foi estornado)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cpaagente');
	}

}
