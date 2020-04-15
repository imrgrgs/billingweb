<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdesaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adesao', function(Blueprint $table)
		{
			$table->increments('ads_id');
			$table->integer('ads_assinante_id')->unsigned()->nullable();
			$table->integer('ads_plano_id')->unsigned()->nullable();
			$table->date('ads_data_contrato')->nullable();
			$table->integer('ads_franquia')->unsigned()->nullable();
			$table->date('ads_data_teto')->nullable();
			$table->integer('ads_minutos_utilizadas')->unsigned()->nullable();
			$table->char('ads_status', 1)->default('');
			$table->char('ads_nossonumero', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adesao');
	}

}
