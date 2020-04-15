<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCprasterminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cprastermin', function(Blueprint $table)
		{
			$table->increments('cpr_id');
			$table->date('cpr_data')->nullable();
			$table->time('cpr_hora')->nullable();
			$table->char('cpr_historico', 100)->nullable();
			$table->float('cpr_valor', 9)->default(0.00);
			$table->char('cpr_operacao', 1)->nullable();
			$table->integer('cpr_terminacao_id')->unsigned()->default(0);
			$table->integer('cpr_fornecedor_id')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cprastermin');
	}

}
