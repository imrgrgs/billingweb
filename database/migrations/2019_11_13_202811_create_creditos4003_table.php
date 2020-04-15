<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditos4003Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditos4003', function(Blueprint $table)
		{
			$table->increments('cr4_id');
			$table->date('cr4_data')->nullable();
			$table->time('cr4_hora')->nullable();
			$table->float('cr4_valor')->nullable();
			$table->char('cr4_tipo', 1)->nullable();
			$table->char('cr4_comprovacao', 1)->nullable();
			$table->integer('cr4_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditos4003');
	}

}
