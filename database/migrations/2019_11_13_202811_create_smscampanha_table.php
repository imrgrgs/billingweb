<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmscampanhaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('smscampanha', function(Blueprint $table)
		{
			$table->increments('smsc_id');
			$table->char('smsc_descricao', 50)->nullable();
			$table->char('smsc_status', 1)->nullable();
			$table->date('smsc_data_ini')->nullable();
			$table->time('smsc_hora_ini')->nullable();
			$table->integer('smsc_terminacao_id')->unsigned()->nullable();
			$table->integer('smsc_fornecedor_id')->unsigned()->nullable();
			$table->char('smsc_login', 15)->nullable();
			$table->integer('smsc_maxretries')->unsigned()->nullable();
			$table->integer('smsc_retrytime')->unsigned()->nullable();
			$table->integer('smsc_waittime')->unsigned()->nullable();
			$table->integer('smsc_reinclusao_automatica')->unsigned()->nullable();
			$table->integer('smsc_representante_id')->unsigned()->nullable();
			$table->time('smsc_hora_parar')->nullable();
			$table->integer('smsc_qtd_simult_noite')->unsigned()->nullable();
			$table->integer('smsc_qtd_simult_dia')->unsigned()->nullable();
			$table->date('smsc_data_encerrar')->nullable();
			$table->char('smsc_bloqueia_procon', 1)->nullable();
			$table->integer('smsc_intervalo_envio')->nullable();
			$table->integer('smsc_volume_envio_por_intervalo')->nullable();
			$table->index(['smsc_login','smsc_id'], 'smsc_bylogin');
			$table->index(['smsc_status','smsc_id'], 'smsc_bystatus');
			$table->index(['smsc_representante_id','smsc_id'], 'smsc_byrepresentante');
			$table->index(['smsc_fornecedor_id','smsc_id'], 'smsc_byfornecedor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('smscampanha');
	}

}
