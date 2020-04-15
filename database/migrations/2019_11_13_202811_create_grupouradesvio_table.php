<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupouradesvioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupouradesvio', function(Blueprint $table)
		{
			$table->integer('grudesvio_id', true)->comment('auto increment pk');
			$table->integer('gru_id')->comment('pk da tabela grupoura');
			$table->char('grudesvio_digito', 4)->comment('identificação do conjunto de digitos selecionados');
			$table->string('grudesvio_nome', 40)->nullable()->comment('denominação para essa tecla digitada');
			$table->char('grudesvio_tipo', 1)->comment('R=Ramal, F=Fila');
			$table->integer('grudesvio_chamar')->comment('se for R terá o id do usuario(tabela user campo ID)  se for F terá o id da fila(tabela grupovoip campo grv_id)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupouradesvio');
	}

}
