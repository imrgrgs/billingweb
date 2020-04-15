<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGvtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gvt', function(Blueprint $table)
		{
			$table->increments('gvt_id');
			$table->string('gvt_user', 30)->default('');
			$table->string('gvt_pass', 30)->default('');
			$table->string('gvt_url', 100)->default('')->index('gvt_url');
			$table->bigInteger('gvt_porta')->default(0);
			$table->string('gvt_user_fsol', 30)->default('')->index('gvt_user_fsol');
			$table->char('gvt_status', 1)->default('')->index('gvt_status');
			$table->integer('gvt_fornecedor_id')->default(0);
			$table->string('gvt_numfone', 15)->default('');
			$table->boolean('gvt_aplicacao')->default(0);
			$table->float('gvt_vlr_callingcard', 5)->default(0.00);
			$table->string('gvt_tp_tarifacao', 4)->default('6060');
			$table->char('gvt_fazer_registro', 1)->default('s');
			$table->float('gvt_vlr_conexao_fixo', 7)->default(0.00);
			$table->float('gvt_vlr_conexao_celular', 7)->default(0.00);
			$table->float('gvt_vlr_callingcard_cel', 5)->default(0.00);
			$table->char('gvt_identificador_via_uri', 1)->default('n');
			$table->string('gvt_arq_audio', 250)->default('');
			$table->char('gvt_lig_gratuita', 1)->default('n');
			$table->integer('gvt_tmp_maximo_gratuita')->default(0);
			$table->string('gvt_codec1', 5)->default('');
			$table->string('gvt_codec2', 5)->default('');
			$table->string('gvt_codec3', 5)->default('');
			$table->string('gvt_codec4', 5)->default('');
			$table->string('gvt_codec5', 5)->default('');
			$table->char('pode_transferir', 1)->default('s');
			$table->integer('gvt_representante_id')->default(0);
			$table->integer('gvt_tabprecos_id')->default(0);
			$table->float('gvt_vlr_fx_revenda', 7)->default(0.00);
			$table->float('gvt_vlr_cel_revenda', 7)->default(0.00);
			$table->integer('gvt_recebe_de')->default(0);
			$table->integer('gvt_lista_negra')->nullable();
			$table->integer('gvt_tipo_atendimento')->default(0);
			$table->string('gvt_telegram_token', 300)->nullable()->comment('Token para envio de Telegram.É composto pelo númro token e o chat id para envioDeve ser preenchido com o tokene separar com pipe(|) o chat idEx: 24343434354546565656|chatidt545454');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gvt');
	}

}
