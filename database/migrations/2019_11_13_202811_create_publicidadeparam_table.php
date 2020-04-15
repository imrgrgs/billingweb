<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicidadeparamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicidadeparam', function(Blueprint $table)
		{
			$table->integer('ppm_id')->unsigned()->unique('ppm_id');
			$table->integer('ppm_qtd_simult_noite')->unsigned()->nullable();
			$table->integer('ppm_qtd_simult_dia')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicidadeparam');
	}

}
