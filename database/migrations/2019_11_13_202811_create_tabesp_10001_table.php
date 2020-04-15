<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabesp10001Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabesp_10001', function(Blueprint $table)
		{
			$table->char('tbe_fonecode', 20)->default('')->unique('tbe_fonecode');
			$table->char('tbe_descricao', 50)->default('');
			$table->char('tbe_tipo', 1)->default('');
			$table->float('tbe_valor', 6, 4)->default(0.0000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tabesp_10001');
	}

}
