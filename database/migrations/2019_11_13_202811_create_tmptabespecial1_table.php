<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTmptabespecial1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmptabespecial1', function(Blueprint $table)
		{
			$table->increments('tmp_01');
			$table->text('tmp_02', 16777215)->nullable();
			$table->text('tmp_03', 16777215)->nullable();
			$table->text('tmp_04', 16777215)->nullable();
			$table->text('tmp_05', 16777215)->nullable();
			$table->text('tmp_06', 16777215)->nullable();
			$table->text('tmp_07', 16777215)->nullable();
			$table->text('tmp_08', 16777215)->nullable();
			$table->text('tmp_09', 16777215)->nullable();
			$table->text('tmp_10', 16777215)->nullable();
			$table->text('tmp_11', 16777215)->nullable();
			$table->text('tmp_12', 16777215)->nullable();
			$table->text('tmp_13', 16777215)->nullable();
			$table->text('tmp_14', 16777215)->nullable();
			$table->text('tmp_15', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmptabespecial1');
	}

}
