<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserscancelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userscancel', function(Blueprint $table)
		{
			$table->increments('atv_id');
			$table->integer('atv_user_id')->default(0);
			$table->date('atv_data')->nullable();
			$table->time('atv_hora')->nullable();
			$table->char('atv_atualizado_ant', 1)->nullable();
			$table->char('atv_atualizado_atu', 1)->nullable();
			$table->integer('atv_representante_id')->unsigned()->nullable();
			$table->integer('atv_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userscancel');
	}

}
