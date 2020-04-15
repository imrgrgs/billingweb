<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsumoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consumo', function(Blueprint $table)
		{
			$table->increments('cns_id');
			$table->string('cns_assinante_id', 30)->nullable()->index('cns_assinante_id');
			$table->dateTime('cns_data_ini')->nullable()->index('cns_data_ini');
			$table->dateTime('cns_data_fin')->nullable()->index('cns_data_fin');
			$table->integer('cns_segundos')->unsigned()->nullable();
			$table->string('cns_destino', 20)->nullable();
			$table->decimal('cns_valor', 8, 4)->nullable();
			$table->decimal('cns_valor_repr', 8, 4)->nullable();
			$table->decimal('cns_valor_master', 8, 4)->nullable();
			$table->integer('cns_representante_id')->unsigned()->nullable();
			$table->integer('cns_fornecedor_id')->unsigned()->nullable();
			$table->integer('cns_terminacao_id')->default(0);
			$table->string('cns_ip', 20)->nullable();
			$table->string('cns_uniqueid', 32)->default('0')->index('cns_uniqueid');
			$table->integer('cns_cabine_id')->default(0)->index('cns_cabine_id');
			$table->decimal('cns_valor_agente', 8, 4)->default(0.0000);
			$table->decimal('cns_valor_vendedor', 8, 4)->default(0.0000);
			$table->string('cns_tptarifacao', 4)->default('');
			$table->decimal('cns_saldo_revendaagente', 10, 4)->default(0.0000);
			$table->decimal('cns_tarifa_assinante', 8, 4)->default(0.0000);
			$table->string('cns_fone_origem', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consumo');
	}

}
