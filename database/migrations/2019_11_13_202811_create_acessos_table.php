<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcessosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acessos', function(Blueprint $table)
		{
			$table->increments('ace_id');
			$table->date('ace_data')->default('0000-00-00');
			$table->time('ace_hora')->default('00:00:00');
			$table->char('ace_ip', 20)->default('');
			$table->char('ace_login', 15)->default('');
			$table->char('ace_senha', 15)->default('');
			$table->char('ace_sucesso', 1)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acessos');
	}

}
