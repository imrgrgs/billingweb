<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedor', function(Blueprint $table)
		{
			$table->increments('for_id');
			$table->string('for_razao', 50)->nullable();
			$table->string('for_contexto', 50)->nullable()->unique('contexto');
			$table->integer('for_qualvalor')->unsigned()->nullable();
			$table->string('for_cnpj', 14)->default('');
			$table->string('for_inscrest', 20)->default('');
			$table->string('for_fantasia', 40)->default('');
			$table->string('for_rua', 40)->nullable();
			$table->string('for_complem', 30)->nullable();
			$table->string('for_bairro', 30)->nullable();
			$table->string('for_cidade', 30)->nullable();
			$table->char('for_estado', 2)->nullable();
			$table->integer('for_cep')->unsigned()->nullable();
			$table->string('for_email', 60)->nullable();
			$table->integer('for_banco')->unsigned()->nullable();
			$table->string('for_agencia', 5)->nullable();
			$table->string('for_conta', 15)->nullable();
			$table->float('for_saldo', 10)->nullable();
			$table->string('for_login', 14)->nullable()->index('for_login');
			$table->string('for_senha', 12)->nullable();
			$table->char('for_mudasenha', 1)->nullable();
			$table->string('for_telefone1', 13)->nullable();
			$table->string('for_telefone2', 13)->nullable();
			$table->string('for_celular', 13)->nullable();
			$table->char('for_status', 1)->nullable();
			$table->date('for_data')->default('0000-00-00');
			$table->float('for_basedolar', 6)->nullable()->default(0.00);
			$table->string('for_contato', 40)->nullable();
			$table->float('for_saldoreal', 10)->nullable();
			$table->char('for_fundador', 1)->default('');
			$table->char('for_comddi', 1)->nullable();
			$table->string('for_dia_vencimento', 5)->nullable();
			$table->integer('for_contas_voip')->unsigned()->nullable();
			$table->float('for_valor_billing', 10)->nullable();
			$table->integer('for_tempo_ligacao')->unsigned()->default(0);
			$table->string('for_inicio_internacionais', 5)->nullable();
			$table->string('for_inicio_nacionais', 5)->nullable();
			$table->char('for_podemudarvlrs', 1)->nullable();
			$table->char('for_finalizar_ligacao', 1)->nullable();
			$table->integer('for_sgs_comecar_cobrar')->unsigned()->default(0);
			$table->integer('for_contas_gvt')->default(0);
			$table->char('for_mostrarassinonline', 1)->nullable()->default('s');
			$table->string('for_logo_master', 100)->nullable();
			$table->char('for_especial', 1)->nullable()->default('n');
			$table->integer('for_qtd_digitos_minimo')->unsigned()->nullable();
			$table->char('for_reinvite', 1)->nullable()->default('n');
			$table->char('for_prefvoipvoip', 2)->default('');
			$table->char('for_ringfalso', 1)->default('n');
			$table->char('for_linguagem', 1)->nullable()->default(1);
			$table->integer('for_ultimoconsumo')->default(0);
			$table->char('for_podeprocessar', 1)->default('n');
			$table->string('for_senhaadmin', 15)->default('');
			$table->char('for_abrirwebphone', 1)->default('f');
			$table->char('for_brpay', 1)->default('n');
			$table->integer('for_tempo_ligacao_cel')->default(1200000);
			$table->char('for_usar_4003', 1)->default('n');
			$table->char('for_voiptovoip_semcredito', 1)->default('n');
			$table->char('for_darmensagemsemcredito', 1)->default('s');
			$table->integer('for_sgs_comecar_cobrar_celular')->default(0);
			$table->char('for_mostrar_ligacoes_nao_cobradas', 1)->default('s');
			$table->char('for_plataforma_exclusiva', 1)->default('n');
			$table->char('for_limitar_digitos_ligacao', 1)->default('s');
			$table->float('for_saldo4003', 8, 3)->default(0.000);
			$table->char('for_atualizado', 1)->default('s');
			$table->float('for_venda_4003', 5, 4)->nullable();
			$table->char('for_terminacao_automatica', 1)->default('n');
			$table->float('for_venda_0800_fixo', 5, 4)->default(0.2900);
			$table->float('for_venda_0800_celular', 5, 4)->default(0.9500);
			$table->char('for_socobrar_4003_secompletar', 1)->default('n');
			$table->char('for_cobrar_4003_emumatarifaso', 1)->default('n');
			$table->char('for_tipo_lig_permitidas_4003', 1)->default('t');
			$table->string('for_tp_tarifacao_4003', 4)->default('6006');
			$table->integer('for_tempo_dial_voip')->default(60);
			$table->integer('for_tempo_dial_pstn')->default(60);
			$table->string('for_rechamar_congestion', 15)->default('CONGESTION');
			$table->string('for_rechamar_chanunavail', 15)->default('CHANUNAVAIL');
			$table->string('for_rechamar_noanswer', 15)->default('');
			$table->string('for_rechamar_busy', 15)->default('');
			$table->float('for_venda_sms', 5, 4)->default(0.2500);
			$table->float('for_saldosms', 5)->default(1.00);
			$table->float('for_valor_dolar_hoje', 7, 4)->default(1.0000);
			$table->char('for_gravar_ligacoes', 1)->default('n');
			$table->float('for_saldo0800cartoes', 9)->default(0.00);
			$table->integer('for_limite_lig_simultaneas')->default(30);
			$table->string('for_dar_mensagem_numerica', 1)->default('s');
			$table->string('for_prefixo_fax', 3)->default('**');
			$table->string('for_sms_provedor_proprio', 1)->default('n');
			$table->string('for_end_url_provedor_sms', 60);
			$table->string('for_login_provedor_sms', 20);
			$table->string('for_senha_provedor_sms', 20);
			$table->string('for_texto_ddi_sms', 4)->default('0055');
			$table->integer('for_banco2');
			$table->string('for_agencia2', 5);
			$table->string('for_conta2', 15);
			$table->integer('for_banco3');
			$table->string('for_agencia3', 5);
			$table->string('for_conta3', 15);
			$table->string('for_usar_portabilidade', 1)->default('n');
			$table->integer('for_provedor_portabilidade')->default(0);
			$table->string('for_portabilidade_senha', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedor');
	}

}
