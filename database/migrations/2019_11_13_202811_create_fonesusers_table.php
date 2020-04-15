<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFonesusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonesusers', function(Blueprint $table)
		{
			$table->string('fne_telefone', 20)->default('')->unique('fne_telefone');
			$table->integer('fne_user_id')->default(0);
			$table->char('retornar_callingcard', 1)->default('n');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fonesusers');
	}

}
