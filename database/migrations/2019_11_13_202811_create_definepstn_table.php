<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefinepstnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('definepstn', function(Blueprint $table)
		{
			$table->increments('def_id');
			$table->integer('def_fornecedor_id')->unsigned()->nullable()->default(0);
			$table->integer('def_representante_id')->unsigned()->nullable()->default(0);
			$table->integer('def_assinante_id')->unsigned()->nullable()->default(0);
			$table->char('def_pais', 2)->nullable();
			$table->char('def_tipo', 1)->nullable();
			$table->char('def_ddiddd_ini', 15)->nullable();
			$table->char('def_ddiddd_fim', 15)->nullable();
			$table->integer('def_terminacao1_id')->unsigned()->nullable();
			$table->integer('def_terminacao2_id')->unsigned()->nullable();
			$table->integer('def_terminacao3_id')->unsigned()->nullable();
			$table->integer('def_terminacao4_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('definepstn');
	}

}
