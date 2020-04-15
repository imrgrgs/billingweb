<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmscampanhafone1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('smscampanhafone1', function(Blueprint $table)
		{
			$table->increments('smscf_id');
			$table->string('smscf_telefone', 20)->nullable()->index('smscffone');
			$table->string('smscf_nome', 40)->nullable()->index('smscfnome');
			$table->date('smscf_data_ligar')->nullable();
			$table->time('smscf_hora_ligar')->nullable();
			$table->date('smscf_data_ligou')->nullable();
			$table->time('smscf_hora_ligou')->nullable();
			$table->integer('smscf_terminacao_id')->unsigned()->nullable();
			$table->char('smscf_criouarq', 1)->nullable();
			$table->integer('smscf_reinclusao')->unsigned()->nullable();
			$table->char('smscf_status', 1)->nullable();
			$table->string('smscf_message', 160)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('smscampanhafone1');
	}

}
