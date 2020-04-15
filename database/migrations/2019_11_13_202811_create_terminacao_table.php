<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTerminacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terminacao', function(Blueprint $table)
		{
			$table->increments('pst_id');
			$table->string('pst_nome', 60)->nullable()->index('pst_nome');
			$table->string('pst_apelido', 30)->nullable();
			$table->string('pst_extension', 50)->nullable()->index('pst_extension');
			$table->integer('pst_fornecedor_id')->unsigned()->default(0);
			$table->integer('pst_del_prefix')->default(0);
			$table->string('pst_channel', 50)->nullable()->index('pst_channel');
			$table->char('pst_status', 1)->nullable()->index('pst_status');
			$table->char('pst_celular', 1)->nullable()->index('pst_celular');
			$table->char('pst_fixo', 1)->nullable();
			$table->float('pst_saldo', 12, 4)->nullable();
			$table->char('pst_atualizado', 1)->nullable();
			$table->float('pst_vlrfixo', 10, 4)->nullable();
			$table->float('pst_vlrcelular', 10, 4)->nullable();
			$table->string('pst_tp_tarifacao', 4)->nullable();
			$table->text('pst_obs', 16777215)->nullable();
			$table->string('pst_login', 30)->nullable()->index('pst_login');
			$table->string('pst_senha', 30)->nullable();
			$table->string('pst_ip_proxy', 30)->nullable()->index('pst_ip_proxy');
			$table->char('pst_reinvite', 1)->nullable()->default('n');
			$table->char('pst_ringfalso', 1)->nullable()->default('n');
			$table->string('pst_nomeficticio', 50)->default('');
			$table->char('pst_formacobranca', 1)->default('b');
			$table->char('pst_finalidade', 1)->default('a');
			$table->char('pst_participa_mcusto', 1)->default('n');
			$table->string('pst_id_terminador', 10)->default('');
			$table->integer('pst_sgs_comecar_cobrar')->default(0);
			$table->integer('pst_sgs_comecar_cobrar_celular')->default(0);
			$table->char('pst_rota_automatica', 1)->default('n');
			$table->char('pst_custoemdolar', 1)->default('n');
			$table->float('pst_limite_maximo', 9)->default(0.00);
			$table->float('pst_consumido', 9)->default(0.00);
			$table->integer('pst_qtde_utilizada')->default(0);
			$table->text('pst_configuracao', 16777215);
			$table->string('pst_fazerregister', 1)->default('n');
			$table->string('pst_jaincluido', 1)->default('n');
			$table->string('pst_codec1', 10);
			$table->string('pst_codec2', 10);
			$table->string('pst_codec3', 10);
			$table->string('pst_codec4', 10);
			$table->string('pst_codec5', 10);
			$table->string('pst_porta', 4)->default('5060');
			$table->integer('pst_digitos_eliminar')->default(0);
			$table->string('pst_caracteres_incluir', 10)->default(' ');
			$table->string('pst_tech_prefix', 10)->default(' ');
			$table->integer('pst_qtde_simultaneas')->default(0);
			$table->integer('pst_codigo_operadora')->default(0);
			$table->string('pst_complemento_callerid', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terminacao');
	}

}
