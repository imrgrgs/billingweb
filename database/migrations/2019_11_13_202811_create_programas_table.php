<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programas', function(Blueprint $table)
		{
			$table->increments('prg_id');
			$table->char('prg_codigo', 3)->nullable()->unique('prg_codigo');
			$table->char('prg_descricao', 60)->nullable();
			$table->char('prg_menu', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programas');
	}

}
