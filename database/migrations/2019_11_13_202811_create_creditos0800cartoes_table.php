<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditos0800cartoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditos0800cartoes', function(Blueprint $table)
		{
			$table->increments('cr8_id');
			$table->date('cr8_data')->nullable();
			$table->time('cr8_hora')->nullable();
			$table->float('cr8_valor')->nullable();
			$table->char('cr8_tipo', 1)->nullable();
			$table->char('cr8_comprovacao', 1)->nullable();
			$table->integer('cr8_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditos0800cartoes');
	}

}
