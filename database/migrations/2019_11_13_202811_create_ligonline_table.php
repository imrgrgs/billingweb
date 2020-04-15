<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLigonlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ligonline', function(Blueprint $table)
		{
			$table->integer('onl_fornecedor_id')->default(0)->index('onl_fornecedor_id');
			$table->integer('onl_representante_id')->default(0)->index('onl_representante_id');
			$table->integer('onl_agente_id')->default(0)->index('onl_agente_id');
			$table->integer('onl_assinante_id')->default(0)->index('onl_assinante_id');
			$table->string('onl_username', 15)->default('');
			$table->string('onl_tempo', 10)->default('');
			$table->string('onl_destino', 15)->default('');
			$table->string('onl_status', 7)->default('');
			$table->string('onl_nome', 40)->default('');
			$table->integer('onl_terminacao_id')->default(0)->index('onl_terminacao_id');
			$table->string('onl_channel_origem', 64)->default('');
			$table->string('onl_channel_destino', 64)->default('');
			$table->integer('onl_cabine_id')->nullable();
			$table->string('onl_nro_origem', 20)->default('0');
			$table->char('onl_callingcard', 1)->default('n');
			$table->string('onl_ip_servidor', 20)->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ligonline');
	}

}
