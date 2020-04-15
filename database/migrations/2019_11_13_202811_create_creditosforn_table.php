<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditosfornTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditosforn', function(Blueprint $table)
		{
			$table->increments('crf_id');
			$table->integer('crf_fornecedor_id')->unsigned()->default(0);
			$table->date('crf_data')->default('0000-00-00');
			$table->time('crf_hora')->default('00:00:00');
			$table->float('crf_valor', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditosforn');
	}

}
