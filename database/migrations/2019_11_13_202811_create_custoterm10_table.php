<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustoterm10Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custoterm10', function(Blueprint $table)
		{
			$table->char('ctt_fonecode', 20)->default('')->unique('ctt_fonecode');
			$table->char('ctt_descricao', 50)->default('');
			$table->float('ctt_valor', 6, 4)->default(0.0000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custoterm10');
	}

}
