<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelularessmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celularessms', function(Blueprint $table)
		{
			$table->integer('csms_id', true);
			$table->string('csms_num_cell', 11)->default('');
			$table->string('csms_nome', 40)->default('');
			$table->integer('csms_grupo_id')->default(0);
			$table->integer('csms_fornecedor_id')->default(0);
			$table->integer('csms_representante_id')->default(0);
			$table->integer('csms_assinante_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celularessms');
	}

}
