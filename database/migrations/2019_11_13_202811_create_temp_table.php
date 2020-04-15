<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temp', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('cmp01', 80)->nullable();
			$table->char('cmp02', 80)->nullable();
			$table->char('cmp03', 80)->default('');
			$table->char('cmp04', 80)->nullable();
			$table->primary(['id','cmp03']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('temp');
	}

}
