<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrecmasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crecmaster', function(Blueprint $table)
		{
			$table->increments('ram_id');
			$table->string('ram_nrodoc', 15)->nullable();
			$table->integer('ram_cliente_id')->unsigned()->nullable();
			$table->date('ram_dtvencto')->nullable();
			$table->float('ram_valor', 10)->nullable();
			$table->string('ram_nrparcela', 5)->nullable();
			$table->text('ram_historico', 16777215)->nullable();
			$table->date('ram_dtpagto')->nullable();
			$table->float('ram_desconto')->nullable();
			$table->float('ram_acrescimo')->nullable();
			$table->date('ram_dtreprogramada')->nullable();
			$table->char('ram_status', 1)->nullable();
			$table->char('ram_forma', 1)->nullable();
			$table->string('ram_nrdocpgto', 15)->nullable();
			$table->integer('ram_planocontas_id')->nullable();
			$table->integer('ram_bancos_id')->unsigned()->nullable();
			$table->char('ram_previsao', 1)->nullable();
			$table->integer('ram_empresa_id')->unsigned()->default(0);
			$table->string('ram_nossonumero', 16)->nullable();
			$table->date('ram_dtemissao')->nullable();
			$table->date('ram_dtefetivacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crecmaster');
	}

}
