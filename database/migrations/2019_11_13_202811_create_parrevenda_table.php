<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParrevendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parrevenda', function(Blueprint $table)
		{
			$table->integer('prv_representante_id')->unsigned()->default(0)->unique('prv_representante_id');
			$table->float('prv_reais_inclusao', 7)->nullable();
			$table->float('prv_perc_acrescimo', 5)->nullable();
			$table->char('prv_emitir_boleto', 1)->nullable();
			$table->float('prv_vlr_avisar', 5)->default(0.00);
			$table->float('prv_reais_gratis', 7)->nullable();
			$table->char('prv_avisar_pospagos', 1)->nullable();
			$table->integer('prv_dias_creditos_vencem')->default(0);
			$table->integer('prv_tempo_ligacao')->default(0);
			$table->char('prv_linkassinantesonline', 1)->default('s');
			$table->char('prv_tocar_anuncios', 1)->default('n');
			$table->char('prv_brpay', 1)->default('n');
			$table->char('prv_webcallback', 1)->default('s');
			$table->char('prv_obriga_documento', 1)->default('s');
			$table->integer('prv_tempo_ligacao_cel')->default(0);
			$table->float('prv_taxa_conexao', 5)->default(0.00);
			$table->float('prv_taxa_desconexao', 5)->default(0.00);
			$table->char('prv_assinante_incluir_ass', 1)->default('n');
			$table->float('prv_perc_assin_inclui_ass', 5, 4)->default(0.0000);
			$table->char('prv_transf_creditos', 1)->default('n');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parrevenda');
	}

}
