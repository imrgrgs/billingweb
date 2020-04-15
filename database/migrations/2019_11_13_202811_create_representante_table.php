<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepresentanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('representante', function(Blueprint $table)
		{
			$table->increments('rep_id');
			$table->integer('rep_fornecedor_id')->nullable()->index('rep_fornecedor_id');
			$table->string('rep_razao', 50)->nullable();
			$table->string('rep_documento', 14)->default('');
			$table->string('rep_inscrest', 20)->default('');
			$table->string('rep_fantasia', 40)->default('');
			$table->string('rep_rua', 40)->nullable();
			$table->string('rep_complem', 30)->nullable();
			$table->string('rep_bairro', 30)->nullable();
			$table->string('rep_cidade', 30)->nullable();
			$table->char('rep_estado', 2)->nullable();
			$table->integer('rep_cep')->unsigned()->nullable();
			$table->string('rep_email', 60)->nullable();
			$table->integer('rep_banco')->unsigned()->nullable();
			$table->string('rep_agencia', 5)->nullable();
			$table->string('rep_conta', 15)->nullable();
			$table->float('rep_saldo', 10)->nullable();
			$table->string('rep_login', 14)->nullable()->index('rep_login');
			$table->string('rep_senha', 12)->nullable();
			$table->char('rep_mudasenha', 1)->nullable();
			$table->string('rep_telefone1', 13)->nullable();
			$table->string('rep_telefone2', 13)->nullable();
			$table->string('rep_celular', 13)->nullable();
			$table->char('rep_status', 1)->nullable();
			$table->float('rep_perccomissao', 5)->nullable();
			$table->date('rep_data')->nullable();
			$table->string('rep_contato', 40)->default('');
			$table->float('rep_percacrescimo', 6, 3)->default(0.000);
			$table->float('rep_saldoreal', 10)->nullable();
			$table->string('rep_nomebanco', 30)->default('');
			$table->string('rep_tpconta', 7)->default('');
			$table->string('rep_nomebanco2', 30)->default('');
			$table->string('rep_tpconta2', 7)->default('');
			$table->integer('rep_banco2')->unsigned()->default(0);
			$table->string('rep_agencia2', 5)->default('');
			$table->string('rep_conta2', 15)->default('');
			$table->string('rep_nomebanco3', 30)->default('');
			$table->string('rep_tpconta3', 7)->default('');
			$table->integer('rep_banco3')->unsigned()->default(0);
			$table->string('rep_agencia3', 5)->default('');
			$table->string('rep_conta3', 15)->default('');
			$table->string('rep_tptarifa', 4)->nullable();
			$table->char('rep_usarpospago', 1)->nullable();
			$table->char('rep_atualizado', 1)->nullable();
			$table->char('rep_criarcontas', 1)->nullable();
			$table->integer('rep_terminacao_id')->unsigned()->nullable();
			$table->integer('rep_terminacao2_id')->unsigned()->nullable();
			$table->integer('rep_terminacao3_id')->unsigned()->nullable();
			$table->integer('rep_terminacao_cel_id')->unsigned()->nullable();
			$table->integer('rep_terminacao2_cel_id')->unsigned()->nullable();
			$table->integer('rep_terminacao3_cel_id')->unsigned()->nullable();
			$table->integer('rep_terminacao_int_id')->unsigned()->nullable();
			$table->integer('rep_terminacao2_int_id')->unsigned()->nullable();
			$table->integer('rep_terminacao3_int_id')->unsigned()->nullable();
			$table->char('rep_cobrar_voipvoip', 1)->default('n');
			$table->char('rep_linguagem', 1)->nullable()->default(1);
			$table->integer('rep_tabelaespecial_id')->unsigned()->default(0);
			$table->integer('rep_lig_simultaneas')->default(2);
			$table->float('rep_vlrporconta', 7)->unsigned()->nullable()->default(0.00);
			$table->integer('rep_diacobranca')->unsigned()->nullable()->default(0);
			$table->integer('rep_sgs_comecar_cobrar')->default(0);
			$table->char('rep_usa_cabines', 1)->default('n');
			$table->char('rep_avisar_fimcreditos', 1)->default('s');
			$table->float('rep_vlrmin_avisar')->default(5.00);
			$table->integer('rep_sgs_comecar_cobrar_celular')->default(0);
			$table->char('rep_usa_4003', 1)->default('n');
			$table->float('rep_venda_4003', 7, 4)->default(0.0000);
			$table->float('rep_venda_0800_fixo', 7, 4)->default(0.0000);
			$table->float('rep_venda_0800_celular', 7, 4)->default(0.0000);
			$table->char('rep_socobrar_4003_secompletar', 1)->default('n');
			$table->char('rep_cobrar_4003_emumatarifaso', 1)->default('n');
			$table->char('rep_tipo_lig_permitidas_4003', 1)->default('t');
			$table->string('rep_tp_tarifacao_4003', 4)->default('6006');
			$table->char('rep_usa_sms', 1)->default('n');
			$table->float('rep_venda_sms', 5, 4)->default(0.2500);
			$table->float('rep_vlr_min_voip2voip', 7)->default(0.00);
			$table->integer('rep_limite_lig_simultaneas')->default(0);
			$table->char('rep_ficar_negativo', 1)->default('n');
			$table->float('rep_limite_ficar_negativo', 7)->default(0.00);
			$table->string('rep_assinante_cartoes', 15);
			$table->string('rep_logo_revenda', 100);
			$table->string('rep_gravar_chamadas', 1)->default('s');
			$table->string('rep_falar_codigo_erros', 1)->default('s');
			$table->string('rep_host_smtp', 100)->nullable()->comment('Enderço do host do smtp da revenda');
			$table->string('rep_cripto_smtp', 6)->nullable()->comment('Tipo de criptografia - SSL ou TLS da revenda');
			$table->integer('rep_port_smtp')->nullable()->default(0)->comment('número da porta para o smtp (25 ou 465 ou 587 ou outra qualquer) default 465');
			$table->string('rep_usuario_smtp', 100)->nullable()->comment('identificação do usuário no client smtp da revenda');
			$table->string('rep_password_smtp', 45)->nullable()->comment('senha do usuário client smtp');
			$table->float('rep_vlr_minimo_credito')->default(5.00);
			$table->string('rep_recibo_deposito_obrigatorio', 1)->default('s');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('representante');
	}

}
