<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabassinante18Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabassinante18', function(Blueprint $table)
		{
			$table->increments('tab_id');
			$table->char('tab_codigo', 4)->default('');
			$table->char('tab_descricao', 50)->default('');
			$table->integer('tab_agente_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tabassinante18');
	}

}
