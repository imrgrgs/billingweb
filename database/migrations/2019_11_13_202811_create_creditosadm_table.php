<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditosadmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditosadm', function(Blueprint $table)
		{
			$table->increments('cca_id');
			$table->integer('cca_fornecedor_id')->unsigned()->default(0);
			$table->date('cca_data')->default('0000-00-00');
			$table->time('cca_hora')->default('00:00:00');
			$table->float('cca_valor', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creditosadm');
	}

}
