<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relacao', function(Blueprint $table)
		{
			$table->increments('rel_id');
			$table->char('rel_username', 13)->nullable();
			$table->char('rel_username_amigo', 13)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relacao');
	}

}
