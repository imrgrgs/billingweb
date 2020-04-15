<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaxvirtualparamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faxvirtualparam', function(Blueprint $table)
		{
			$table->integer('pfv_id')->unsigned()->unique('pfv_id');
			$table->integer('pfv_qtd_simult_noite')->unsigned()->nullable();
			$table->integer('pfv_qtd_simult_dia')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faxvirtualparam');
	}

}
