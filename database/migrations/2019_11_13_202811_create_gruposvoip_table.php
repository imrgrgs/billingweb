<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGruposvoipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gruposvoip', function(Blueprint $table)
		{
			$table->increments('grv_id');
			$table->char('grv_nome', 40)->nullable();
			$table->char('grv_estrategia', 1)->nullable();
			$table->integer('grv_representante_id')->unsigned()->default(0);
			$table->integer('grv_fornecedor_id')->unsigned()->default(0);
			$table->char('grv_musica_espera', 50)->default('')->index('grv_musica_espera');
			$table->integer('grv_alias_grupo');
			$table->integer('grv_assinante_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gruposvoip');
	}

}
