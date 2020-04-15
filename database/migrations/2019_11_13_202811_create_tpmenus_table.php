<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpmenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tpmenus', function(Blueprint $table)
		{
			$table->increments('tip_id');
			$table->char('tip_descricao', 40)->nullable();
			$table->char('tip_menu', 1)->nullable();
			$table->integer('tip_fornecedor_id')->unsigned()->nullable();
			$table->integer('tip_representante_id')->unsigned()->nullable();
			$table->integer('tip_agente_id')->unsigned()->nullable();
			$table->text('tip_permissao', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tpmenus');
	}

}
