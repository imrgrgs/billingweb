<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTmpprecterm1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmpprecterm1', function(Blueprint $table)
		{
			$table->increments('tmp_01');
			$table->text('tmp_02', 65535)->nullable();
			$table->text('tmp_03', 65535)->nullable();
			$table->text('tmp_04', 65535)->nullable();
			$table->text('tmp_05', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmpprecterm1');
	}

}
