<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaxvirtualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faxvirtual', function(Blueprint $table)
		{
			$table->increments('fax_id');
			$table->char('fax_descricao', 50)->nullable();
			$table->char('fax_status', 1)->nullable();
			$table->binary('fax_documento')->nullable();
			$table->date('fax_data_ini')->nullable();
			$table->time('fax_hora_ini')->nullable();
			$table->integer('fax_terminacao_id')->unsigned()->nullable();
			$table->integer('fax_fornecedor_id')->unsigned()->nullable();
			$table->integer('fax_representante_id')->unsigned()->nullable();
			$table->char('fax_login', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faxvirtual');
	}

}
