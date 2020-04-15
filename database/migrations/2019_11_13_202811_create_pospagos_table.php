<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePospagosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pospagos', function(Blueprint $table)
		{
			$table->integer('pos_assinante_id')->unsigned()->default(0)->primary();
			$table->integer('pos_plano_id')->unsigned()->nullable();
			$table->date('pos_data_contrato')->nullable();
			$table->integer('pos_utilizado_fixo')->unsigned()->nullable();
			$table->integer('pos_utilizado_celular')->unsigned()->nullable();
			$table->integer('pos_dia_zerar')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pospagos');
	}

}
