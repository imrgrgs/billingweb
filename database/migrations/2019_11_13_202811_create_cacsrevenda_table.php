<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCacsrevendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cacsrevenda', function(Blueprint $table)
		{
			$table->increments('cac_id');
			$table->integer('cac_representante_id')->nullable();
			$table->date('cac_data_abertura')->nullable()->default('0000-00-00');
			$table->time('cac_hora_abertura')->nullable();
			$table->char('cac_tipo', 1)->nullable();
			$table->text('cac_descricao')->nullable();
			$table->text('cac_solucao')->nullable();
			$table->char('cac_status', 1)->nullable();
			$table->string('cac_nomecontato', 40)->nullable();
			$table->date('cac_data_solucao')->nullable();
			$table->time('cac_hora_solucao')->nullable();
			$table->string('cac_login', 12)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cacsrevenda');
	}

}
