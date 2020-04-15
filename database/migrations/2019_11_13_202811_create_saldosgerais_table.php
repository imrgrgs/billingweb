<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaldosgeraisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saldosgerais', function(Blueprint $table)
		{
			$table->increments('sdg_id');
			$table->date('sdg_data')->nullable();
			$table->time('sdg_hora')->nullable();
			$table->char('sdg_tipo', 1)->nullable();
			$table->float('sdg_valor', 10, 4)->default(0.0000);
			$table->integer('sdg_codigo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('saldosgerais');
	}

}
