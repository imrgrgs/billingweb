<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabespa181Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabespa_181', function(Blueprint $table)
		{
			$table->char('tbe_fonecode', 20)->default('')->unique('tbe_fonecode');
			$table->char('tbe_descricao', 50)->default('');
			$table->char('tbe_tipo', 1)->default('');
			$table->float('tbe_valor', 6, 4)->default(0.0000);
			$table->float('tbe_vlr_feriado', 6, 4)->default(0.0000);
			$table->float('tbe_vlr_domingo', 6, 4)->default(0.0000);
			$table->time('tbe_hrini_ss')->nullable();
			$table->time('tbe_hrfim_ss')->nullable();
			$table->float('tbe_vlr_ss', 6, 4)->default(0.0000);
			$table->time('tbe_hrini_sabado')->nullable();
			$table->time('tbe_hrfim_sabado')->nullable();
			$table->float('tbe_vlr_sabado', 6, 4)->default(0.0000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tabespa_181');
	}

}
