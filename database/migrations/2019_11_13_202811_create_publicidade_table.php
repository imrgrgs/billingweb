<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicidade', function(Blueprint $table)
		{
			$table->increments('pub_id');
			$table->char('pub_descricao', 50)->nullable();
			$table->char('pub_status', 1)->nullable()->index('pub_status');
			$table->char('pub_gingle_wav', 100)->nullable()->index('pub_gingle_wav');
			$table->char('pub_endereco_gingle', 100)->nullable()->index('pub_endereco_gingle');
			$table->char('pub_gingle_wav2', 100)->nullable();
			$table->char('pub_endereco_gingle2', 100)->nullable();
			$table->integer('pub_tempo_gingle')->unsigned()->nullable();
			$table->date('pub_data_ini')->nullable();
			$table->time('pub_hora_ini')->nullable();
			$table->integer('pub_terminacao_id')->unsigned()->nullable();
			$table->integer('pub_fornecedor_id')->unsigned()->nullable();
			$table->char('pub_login', 15)->nullable()->index('pub_login');
			$table->integer('pub_maxretries')->unsigned()->nullable();
			$table->integer('pub_retrytime')->unsigned()->nullable();
			$table->integer('pub_waittime')->unsigned()->nullable();
			$table->integer('pub_reinclusao_automatica')->unsigned()->nullable();
			$table->integer('pub_representante_id')->unsigned()->nullable();
			$table->char('pub_checar_satisfacao', 1)->nullable();
			$table->time('pub_hora_parar')->nullable();
			$table->integer('pub_qtd_simult_noite')->unsigned()->nullable();
			$table->integer('pub_qtd_simult_dia')->unsigned()->nullable();
			$table->date('pub_data_encerrar')->nullable();
			$table->char('pub_bloqueia_procon', 1)->nullable();
			$table->integer('pub_initial_silence')->nullable();
			$table->integer('pub_greeting')->nullable();
			$table->integer('pub_after_greeting_silence')->nullable();
			$table->integer('pub_total_analysis_time')->nullable();
			$table->integer('pub_minimum_word_length')->nullable();
			$table->integer('pub_between_words_silence')->nullable();
			$table->integer('pub_maximum_number_of_words')->nullable();
			$table->integer('pub_silence_threshold')->nullable();
			$table->integer('pub_maximum_word_length')->nullable();
			$table->char('pub_checar_automatizado', 1)->nullable();
			$table->integer('pub_intervalo_envio')->nullable();
			$table->integer('pub_volume_envio_por_intervalo')->nullable();
			$table->index(['pub_login','pub_id'], 'pub_bylogin');
			$table->index(['pub_status','pub_id'], 'pub_bystatus');
			$table->index(['pub_representante_id','pub_id'], 'pub_byrepresentante');
			$table->index(['pub_fornecedor_id','pub_id'], 'pub_byfornecedor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicidade');
	}

}
