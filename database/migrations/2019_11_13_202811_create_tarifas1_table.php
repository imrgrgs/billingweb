<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifas1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarifas1', function(Blueprint $table)
		{
			$table->increments('tar_id');
			$table->integer('tar_grupo_id')->unsigned()->default(0);
			$table->char('tar_fonecode', 15)->default('');
			$table->float('tar_valor1', 6, 4)->default(0.0000);
			$table->float('tar_valor2', 6, 4)->default(0.0000);
			$table->float('tar_valor3', 6, 4)->default(0.0000);
			$table->float('tar_valor4', 6, 4)->default(0.0000);
			$table->float('tar_valor5', 6, 4)->default(0.0000);
			$table->integer('tar_fornecedor_id')->unsigned()->default(0);
			$table->float('tar_valor_diferenciado', 6, 4)->default(0.0000);
			$table->integer('tar_terminacao_id')->unsigned()->default(0);
			$table->char('tar_tipo', 1)->default('');
			$table->char('tar_fazpartefixado', 1)->default('');
			$table->integer('tar_terminacao2_id')->unsigned()->default(0);
			$table->integer('tar_terminacao3_id')->unsigned()->default(0);
			$table->char('tar_master', 1)->default('');
			$table->char('tar_descricao', 50)->default('');
			$table->integer('tar_terminacao_fax')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarifas1');
	}

}
