<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifasusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarifasusers', function(Blueprint $table)
		{
			$table->integer('tas_user_id')->unsigned()->default(0);
			$table->integer('tas_tarifa_id')->unsigned()->default(0);
			$table->float('tas_valor', 8, 4)->nullable();
			$table->char('tas_tipo', 1)->nullable();
			$table->index(['tas_user_id','tas_tarifa_id'], 'tas_user_id');
			$table->primary(['tas_user_id','tas_tarifa_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarifasusers');
	}

}
