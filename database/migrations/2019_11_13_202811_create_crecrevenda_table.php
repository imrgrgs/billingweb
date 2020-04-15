<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrecrevendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crecrevenda', function(Blueprint $table)
		{
			$table->increments('rrv_id');
			$table->string('rrv_nrodoc', 15)->nullable();
			$table->integer('rrv_cliente_id')->unsigned()->nullable();
			$table->date('rrv_dtvencto')->nullable();
			$table->float('rrv_valor', 10)->nullable();
			$table->string('rrv_nrparcela', 5)->nullable();
			$table->text('rrv_historico', 16777215)->nullable();
			$table->date('rrv_dtpagto')->nullable();
			$table->float('rrv_desconto')->nullable();
			$table->float('rrv_acrescimo')->nullable();
			$table->date('rrv_dtreprogramada')->nullable();
			$table->char('rrv_status', 1)->nullable();
			$table->char('rrv_forma', 1)->nullable();
			$table->string('rrv_nrdocpgto', 15)->nullable();
			$table->integer('rrv_planocontas_id')->nullable();
			$table->integer('rrv_bancos_id')->unsigned()->nullable();
			$table->char('rrv_previsao', 1)->nullable();
			$table->integer('rrv_empresa_id')->unsigned()->default(0);
			$table->string('rrv_nossonumero', 16)->nullable();
			$table->date('rrv_dtemissao')->nullable();
			$table->date('rrv_dtefetivacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crecrevenda');
	}

}
