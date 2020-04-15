<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePopsreveassiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('popsreveassi', function(Blueprint $table)
		{
			$table->integer('popar_id', true);
			$table->integer('popar_fornecedor_id')->default(0);
			$table->integer('popar_representante_id')->default(0);
			$table->string('popar_assinante', 15)->default('');
			$table->integer('popar_tarifas_id')->default(0);
			$table->integer('popar_terminacao1_id')->default(0);
			$table->integer('popar_terminacao2_id')->default(0);
			$table->integer('popar_terminacao3_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('popsreveassi');
	}

}
