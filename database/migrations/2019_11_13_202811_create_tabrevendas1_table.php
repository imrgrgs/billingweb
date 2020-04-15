<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabrevendas1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabrevendas1', function(Blueprint $table)
		{
			$table->increments('tab_id');
			$table->char('tab_codigo', 4)->default('');
			$table->char('tab_descricao', 50)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tabrevendas1');
	}

}
