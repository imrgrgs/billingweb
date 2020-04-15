<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogtarifacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logtarifacao', function(Blueprint $table)
		{
			$table->increments('lgt_id');
			$table->integer('lgt_representante_id')->nullable();
			$table->char('lgt_assinante', 15)->nullable();
			$table->char('lgt_tptarifacao', 4)->nullable();
			$table->date('lgt_data_ini')->nullable();
			$table->time('lgt_hora_ini')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logtarifacao');
	}

}
