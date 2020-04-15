<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoURATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupoURA', function(Blueprint $table)
		{
			$table->integer('gru_id', true)->comment('auto increment pk');
			$table->string('gru_nome', 40)->nullable()->comment('denominação dessa ura');
			$table->integer('gru_representante_id')->comment('id do representante');
			$table->string('gru_musica_espera', 250)->nullable()->comment('nome e extensão do arquivo contendo a música de espera');
			$table->string('gru_arquivo_ura', 250)->nullable()->comment('nome e extensão do arquivo com a mensagem URA');
			$table->integer('gru_assinante_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupoURA');
	}

}
