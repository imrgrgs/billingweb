<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstatisticasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estatisticas', function(Blueprint $table)
		{
			$table->increments('est_id');
			$table->string('est_destino', 20)->nullable();
			$table->integer('est_fornecedor_id')->unsigned()->nullable()->index('est_fornecedor_id');
			$table->integer('est_representante_id')->unsigned()->nullable();
			$table->string('est_status', 30)->nullable()->index('est_status');
			$table->integer('est_tempo_ate_atender')->unsigned()->nullable();
			$table->integer('est_tempo_conversa')->unsigned()->nullable();
			$table->integer('est_terminacao_id')->unsigned()->nullable()->index('est_terminacao_id');
			$table->string('est_assinante', 15)->nullable()->index('est_assinante');
			$table->dateTime('est_data_inicio')->nullable()->index('est_data_inicio');
			$table->dateTime('est_data_final')->nullable();
			$table->integer('est_tentativa')->unsigned()->nullable();
			$table->string('est_uniqueid', 32)->default('');
			$table->integer('est_causahangup')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estatisticas');
	}

}
