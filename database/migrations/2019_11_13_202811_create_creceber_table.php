<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreceberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creceber', function(Blueprint $table)
		{
			$table->increments('rec_id');
			$table->string('rec_nrodoc', 15)->nullable();
			$table->integer('rec_cliente_id')->unsigned()->nullable();
			$table->date('rec_dtvencto')->nullable();
			$table->float('rec_valor', 10)->nullable();
			$table->string('rec_nrparcela', 5)->nullable();
			$table->text('rec_historico', 16777215)->nullable();
			$table->date('rec_dtpagto')->nullable();
			$table->float('rec_desconto')->nullable();
			$table->float('rec_acrescimo')->nullable();
			$table->date('rec_dtreprogramada')->nullable();
			$table->char('rec_status', 1)->nullable();
			$table->char('rec_forma', 1)->nullable();
			$table->string('rec_nrdocpgto', 15)->nullable();
			$table->integer('rec_planocontas_id')->nullable();
			$table->integer('rec_bancos_id')->unsigned()->nullable();
			$table->char('rec_previsao', 1)->nullable();
			$table->integer('rec_empresa_id')->unsigned()->default(0);
			$table->string('rec_nossonumero', 20)->nullable();
			$table->date('rec_dtemissao')->nullable();
			$table->date('rec_dtefetivacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('creceber');
	}

}
