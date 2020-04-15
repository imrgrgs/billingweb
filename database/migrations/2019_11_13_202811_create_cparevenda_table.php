<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCparevendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cparevenda', function(Blueprint $table)
		{
			$table->increments('cpa_id');
			$table->integer('cpa_representante_id')->unsigned()->default(0);
			$table->date('cpa_data')->default('0000-00-00');
			$table->time('cpa_hora')->default('00:00:00');
			$table->float('cpa_valor', 10)->default(0.00);
			$table->char('cpa_status', 1)->nullable();
			$table->date('cpa_dataliberou')->nullable();
			$table->char('cpa_tipo', 1)->default('');
			$table->string('cpa_historico', 60)->default('');
			$table->string('cpa_boleto', 20)->default('');
			$table->float('cpa_saldoanterior_rev', 10)->default(0.00);
			$table->char('cpa_comprovacao', 1)->default('');
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
		Schema::drop('cparevenda');
	}

}
