<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pins', function(Blueprint $table)
		{
			$table->integer('pin_id', true);
			$table->integer('pin_number')->default(0)->unique('pin_number');
			$table->string('pin_plataforma', 20)->default('');
			$table->integer('pin_user_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pins');
	}

}
