<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCabinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cabines', function(Blueprint $table)
		{
			$table->integer('cab_id', true);
			$table->date('cab_data')->default('0000-00-00');
			$table->time('cab_hora')->default('00:00:00');
			$table->string('cab_cliente', 50)->default('');
			$table->integer('cab_user_id')->default(0);
			$table->integer('cab_representante_id')->default(0);
			$table->integer('cab_fornecedor_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cabines');
	}

}
