<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicfones10Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicfones10', function(Blueprint $table)
		{
			$table->increments('pbt_id');
			$table->char('pbt_telefone', 20)->nullable();
			$table->date('pbt_data_ligar')->nullable();
			$table->time('pbt_hora_ligar')->nullable();
			$table->date('pbt_data_ligou')->nullable();
			$table->time('pbt_hora_ligou')->nullable();
			$table->integer('pbt_tempo_ouviu')->unsigned()->nullable();
			$table->char('pbt_obs', 80)->nullable();
			$table->integer('pbt_terminacao_id')->unsigned()->nullable();
			$table->char('pbt_criouarq', 1)->nullable();
			$table->integer('pbt_reinclusao')->unsigned()->nullable();
			$table->integer('pbt_cpf')->unsigned()->nullable();
			$table->char('pbt_satisfacao', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicfones10');
	}

}
