<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLigacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ligacoes', function(Blueprint $table)
		{
			$table->increments('lge_id');
			$table->char('lge_assinante', 30)->nullable()->index('lge_assinante');
			$table->dateTime('lge_datainicio')->nullable()->index('lge_datainicio');
			$table->dateTime('lge_datafim')->nullable()->index('lge_datafim');
			$table->integer('lge_segundos')->unsigned()->nullable();
			$table->char('lge_fone_origem', 20)->nullable();
			$table->float('lge_valor', 8, 3)->default(0.000);
			$table->float('lge_valor_agente', 8, 3)->default(0.000);
			$table->float('lge_valor_repres', 8, 3)->default(0.000);
			$table->float('lge_valor_master', 8, 3)->default(0.000);
			$table->integer('lge_representante_id')->unsigned()->nullable();
			$table->integer('lge_fornecedor_id')->unsigned()->nullable();
			$table->integer('lge_gvt_id')->unsigned()->nullable();
			$table->char('lge_tptarifacao', 4)->nullable();
			$table->char('lge_status', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ligacoes');
	}

}
