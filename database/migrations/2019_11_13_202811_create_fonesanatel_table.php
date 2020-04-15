<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFonesanatelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonesanatel', function(Blueprint $table)
		{
			$table->increments('anal_id');
			$table->char('anal_sigla_uf', 2)->nullable();
			$table->char('anal_sigla_cnl', 4)->nullable();
			$table->char('anal_codigo_cnl', 5)->nullable();
			$table->char('anal_localidade', 50)->nullable();
			$table->char('anal_municipio', 50)->nullable();
			$table->char('anal_codigo_area', 5)->nullable();
			$table->char('anal_prefixo', 7)->nullable()->index('anal_prefixo');
			$table->char('anal_prestadora', 30)->nullable();
			$table->char('anal_faixa_ini', 4)->nullable()->index('anal_faixa_ini');
			$table->char('anal_faixa_fim', 4)->nullable()->index('anal_faixa_fim');
			$table->char('anal_latitude', 8)->nullable();
			$table->char('anal_hemisferio', 5)->nullable();
			$table->char('anal_longitude', 8)->nullable();
			$table->char('anal_sigla_cnl_local', 4)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fonesanatel');
	}

}
