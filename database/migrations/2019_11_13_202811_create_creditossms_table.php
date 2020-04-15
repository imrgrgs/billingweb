<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditossmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditossms', function(Blueprint $table)
		{
			$table->increments('crs_id');
			$table->date('crs_data')->nullable();
			$table->time('crs_hora')->nullable();
			$table->float('crs_valor')->nullable();
			$table->char('crs_tipo', 1)->nullable();
			$table->char('crs_comprovacao', 1)->nullable();
			$table->integer('crs_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditossms');
	}

}
