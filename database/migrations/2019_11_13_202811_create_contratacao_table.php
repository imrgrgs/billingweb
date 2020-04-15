<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratacao', function(Blueprint $table)
		{
			$table->increments('cnt_id');
			$table->integer('cnt_assinante_id')->unsigned()->default(0);
			$table->date('cnt_data')->default('0000-00-00');
			$table->time('cnt_hora')->default('00:00:00');
			$table->float('cnt_valor', 10)->default(0.00);
			$table->char('cnt_status', 1)->nullable();
			$table->date('cnt_dataliberou')->nullable();
			$table->char('cnt_tipo', 1)->default('');
			$table->string('cnt_historico', 80);
			$table->string('cnt_boleto', 20)->default('');
			$table->integer('cnt_agente_id')->unsigned()->nullable();
			$table->float('cnt_saldo_repres', 10, 4)->nullable()->default(0.0000);
			$table->float('cnt_percentual_rev', 5, 4)->default(0.0000);
			$table->float('cnt_percentual_assin', 5, 4)->default(0.0000);
			$table->float('cnt_saldo_assin_ant', 8, 4)->default(0.0000);
			$table->float('cnt_saldo_rev_ant', 8, 4)->default(0.0000);
			$table->char('cnt_comprovacao', 1)->default('');
			$table->integer('cnt_estorno_id')->nullable()->default(0)->comment('Se cnt_tipo = \'c\' então o id do estorno aponta para a transação de estorno(o débito gerado)Se cnt_tipo = \'d\' então o id do estorno aponta para a transação de compra(o crédito que foi estornado)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contratacao');
	}

}
