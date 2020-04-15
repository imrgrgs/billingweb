<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParboletoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parboleto', function(Blueprint $table)
		{
			$table->integer('bol_id')->unsigned()->default(0);
			$table->integer('bol_empresa_id')->unsigned()->default(0);
			$table->integer('bol_banco')->unsigned()->default(0);
			$table->integer('bol_agencia')->unsigned()->default(0);
			$table->char('bol_conta', 14)->default(0);
			$table->char('bol_localpagamento', 60)->default('');
			$table->char('bol_carteira', 12)->default('');
			$table->char('bol_instrucao1', 60)->default('');
			$table->char('bol_instrucao2', 60)->default('');
			$table->char('bol_instrucao3', 60)->default('');
			$table->char('bol_instrucao4', 60)->default('');
			$table->char('bol_instrucao5', 60)->default('');
			$table->char('bol_nossonumero', 20)->nullable();
			$table->float('bol_percjuros', 5)->nullable();
			$table->float('bol_taxabancaria', 5)->nullable();
			$table->float('bol_tetotxbanc')->nullable();
			$table->float('bol_vlrminimo', 10)->default(0.00);
			$table->integer('bol_convenio')->unsigned()->default(0);
			$table->integer('bol_qtd_dias_vcto')->default(2);
			$table->index(['bol_id','bol_empresa_id'], 'bol_id_2');
			$table->unique(['bol_id','bol_empresa_id'], 'bol_id');
			$table->primary(['bol_id','bol_empresa_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parboleto');
	}

}
