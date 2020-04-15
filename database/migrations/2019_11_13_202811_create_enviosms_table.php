<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnviosmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enviosms', function(Blueprint $table)
		{
			$table->increments('esms_id');
			$table->dateTime('esms_data')->nullable();
			$table->float('esms_valor')->nullable();
			$table->float('esms_valor_rev')->nullable();
			$table->float('esms_valor_ass')->nullable();
			$table->char('esms_status', 1)->nullable();
			$table->string('esms_assinante', 30)->nullable();
			$table->string('esms_fone_destino', 15)->nullable();
			$table->text('esms_mensagem', 16777215)->nullable();
			$table->integer('esms_fornecedor_id')->unsigned()->nullable();
			$table->integer('esms_representante_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enviosms');
	}

}
