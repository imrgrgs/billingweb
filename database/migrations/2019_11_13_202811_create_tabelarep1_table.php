<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabelarep1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabelarep1', function(Blueprint $table)
		{
			$table->integer('tbr_representante_id')->default(0);
			$table->integer('tbr_tarifacao_id')->default(0);
			$table->float('tbr_valor', 10, 4)->default(0.0000);
			$table->integer('tbr_terminacao_id')->unsigned()->default(0);
			$table->unique(['tbr_representante_id','tbr_tarifacao_id'], 'tbr_representante_id');
			$table->primary(['tbr_representante_id','tbr_tarifacao_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tabelarep1');
	}

}
