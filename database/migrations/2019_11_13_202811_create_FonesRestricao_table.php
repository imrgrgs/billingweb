<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFonesRestricaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FonesRestricao', function(Blueprint $table)
		{
			$table->increments('fonesrestricao_id');
			$table->integer('fonesrestricao_user_id')->nullable();
			$table->string('fonesrestricao_telefone', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FonesRestricao');
	}

}
