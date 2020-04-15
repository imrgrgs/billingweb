<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdemterminacoesIaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordemterminacoes_ia', function(Blueprint $table)
		{
			$table->increments('oia_id');
			$table->integer('oia_fornecedor_id')->unsigned()->nullable();
			$table->integer('oia_terminacao_id')->unsigned()->nullable();
			$table->char('oia_ddd', 3)->nullable();
			$table->integer('oia_tempo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ordemterminacoes_ia');
	}

}
