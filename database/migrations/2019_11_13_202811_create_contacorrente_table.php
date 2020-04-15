<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContacorrenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacorrente', function(Blueprint $table)
		{
			$table->increments('cco_id');
			$table->date('cco_data')->nullable();
			$table->time('cco_hora')->nullable();
			$table->char('cco_historico', 60)->nullable();
			$table->float('cco_valor', 7)->nullable();
			$table->char('cco_tipo', 1)->nullable();
			$table->char('cco_assinante', 15)->nullable();
			$table->integer('cco_representante_id')->unsigned()->nullable();
			$table->integer('cco_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacorrente');
	}

}
