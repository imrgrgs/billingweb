<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAparelhosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aparelhos', function(Blueprint $table)
		{
			$table->increments('apa_id');
			$table->string('apa_descricao', 60)->default('');
			$table->float('apa_valor')->default(0.00);
			$table->integer('apa_fornecedor_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aparelhos');
	}

}
