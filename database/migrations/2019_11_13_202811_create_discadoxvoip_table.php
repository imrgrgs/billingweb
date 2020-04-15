<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscadoxvoipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discadoxvoip', function(Blueprint $table)
		{
			$table->increments('dis_id');
			$table->char('dis_numerodiscado', 20)->nullable();
			$table->char('dis_login_voip', 20)->nullable();
			$table->integer('dis_representante_id')->unsigned()->nullable();
			$table->integer('dis_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discadoxvoip');
	}

}
