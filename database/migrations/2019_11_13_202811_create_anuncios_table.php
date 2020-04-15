<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnunciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anuncios', function(Blueprint $table)
		{
			$table->increments('anu_id');
			$table->char('anu_descricao', 50)->nullable();
			$table->char('anu_status', 1)->nullable();
			$table->char('anu_gingle_wav', 100)->nullable();
			$table->char('anu_endereco_gingle', 100)->nullable();
			$table->integer('anu_qtde_tocar')->unsigned()->nullable();
			$table->integer('anu_qtde_tocado')->unsigned()->nullable();
			$table->date('anu_data_tocado')->nullable();
			$table->time('anu_hora_tocado')->nullable();
			$table->integer('anu_representante_id')->unsigned()->nullable();
			$table->integer('anu_fornecedor_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anuncios');
	}

}
