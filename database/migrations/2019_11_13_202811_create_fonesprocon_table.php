<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFonesproconTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonesprocon', function(Blueprint $table)
		{
			$table->increments('fpro_id');
			$table->char('fpro_ddd', 2)->nullable();
			$table->string('fpro_fone', 20)->nullable();
			$table->string('fpro_dddfone', 20)->nullable();
			$table->date('fpro_cadastro')->nullable();
			$table->string('fpro_evento', 50)->nullable();
			$table->date('fpro_data_evento')->nullable();
			$table->index(['fpro_ddd','fpro_fone','fpro_id'], 'fpro_byfone');
			$table->index(['fpro_dddfone','fpro_id'], 'fpro_bydddfone');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fonesprocon');
	}

}
