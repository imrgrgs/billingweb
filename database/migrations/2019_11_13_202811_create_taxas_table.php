<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taxas', function(Blueprint $table)
		{
			$table->increments('tax_id');
			$table->integer('tax_pais_id')->unsigned()->nullable();
			$table->integer('tax_plano_id')->unsigned()->nullable();
			$table->char('tax_tipo', 5)->nullable();
			$table->float('tax_valor', 6)->nullable();
			$table->float('tax_valorfora', 6)->nullable();
			$table->float('tax_vlrfornecedor', 6)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taxas');
	}

}
