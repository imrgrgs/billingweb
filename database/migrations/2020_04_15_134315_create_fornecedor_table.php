<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->integer('for_id', true, true);
            $table->integer('for_admin_id', false, true);
            $table->string('for_razao', 50)->nullable();
            $table->string('for_contexto', 50)->nullable();
            $table->integer('for_qualvalor', false, true);
            $table->string('for_cnpj', 14)->nullable();
            $table->string('for_inscrest', 20)->nullable();
            $table->string('for_fantasia', 40)->nullable();
            $table->string('for_rua', 40)->nullable();
            $table->string('for_complem', 30)->nullable();
            $table->string('for_bairro', 30)->nullable();
            $table->string('for_cidade', 30)->nullable();
            $table->string('for_estado', 2)->nullable();
            $table->integer('for_cep', false, true);
            $table->string('for_email', 60)->nullable();
            $table->integer('for_banco', false, true);
            $table->string('for_agencia', 5)->nullable();
            $table->string('for_conta', 15)->nullable();
            $table->float('for_saldo', 10, 2);
            $table->string('for_login', 14)->nullable();
            $table->string('for_senha', 14)->nullable();
            $table->string('for_mudasenha', 1)->nullable();
            $table->string('for_telefone1', 13)->nullable();
            $table->string('for_telefone2', 13)->nullable();
            $table->string('for_celular', 13)->nullable();
            $table->string('for_status', 1)->nullable();
            $table->date('for_data')->nullable();
            $table->float('for_basedolar', 6, 2);
            $table->string('for_contato', 40)->nullable();
            $table->float('for_saldoreal', 10, 2);
            $table->string('for_fundador', 1)->nullable();
            $table->string('for_comddi', 1)->nullable();
            $table->string('for_dia_vencimento', 5)->nullable();
            $table->integer('for_contas_voip', false, true);
            $table->float('for_valor_billing', 10, 2);
            $table->integer('for_tempo_ligacao', false, true);
            $table->string('for_inicio_internacionais', 5)->nullable();
            $table->string('for_inicio_nacionais', 5)->nullable();
            $table->string('for_podemudarvlrs', 1)->nullable();
            $table->string('for_finalizar_ligacao', 1)->nullable();
            $table->integer('for_sgs_comecar_cobrar', false, true);
            $table->integer('for_contas_gvt', false);
            $table->string('for_mostrarassinonline', 1)->nullable();
            $table->string('for_logo_master', 100)->nullable();
            $table->string('for_especial', 1)->nullable();
            $table->integer('for_qtd_digitos_minimo', false, true);
            $table->string('for_reinvite', 1)->nullable();
            $table->string('for_prefvoipvoip', 2)->nullable();
            $table->string('for_ringfalso', 1);
            $table->string('for_linguagem', 1)->nullable();
            $table->integer('for_ultimoconsumo', false);
            $table->string('for_podeprocessar', 1);
            $table->string('for_senhaadmin', 15)->nullable();
            $table->string('for_abrirwebphone', 1);
            $table->string('for_brpay', 1);
            $table->integer('for_tempo_ligacao_cel', false);
            $table->string('for_usar_4003', 1);
            $table->string('for_voiptovoip_semcredito', 1);
            $table->string('for_darmensagemsemcredito', 1);
            $table->integer('for_sgs_comecar_cobrar_celular', false);
            $table->string('for_mostrar_ligacoes_nao_cobradas', 1);
            $table->string('for_plataforma_exclusiva', 1);
            $table->string('for_limitar_digitos_ligacao', 1);
            $table->float('for_saldo4003', 8, 3);
            $table->string('for_atualizado', 1);
            $table->float('for_venda_4003', 5, 4);
            $table->string('for_terminacao_automatica', 1);
            $table->float('for_venda_0800_fixo', 5, 4);
            $table->float('for_venda_0800_celular', 5, 4);
            $table->string('for_socobrar_4003_secompletar', 1);
            $table->string('for_cobrar_4003_emumatarifaso', 1);
            $table->string('for_tipo_lig_permitidas_4003', 1);
            $table->string('for_tp_tarifacao_4003', 4);
            $table->integer('for_tempo_dial_voip', false);
            $table->integer('for_tempo_dial_pstn', false);
            $table->string('for_rechamar_congestion', 15);
            $table->string('for_rechamar_chanunavail', 15);
            $table->string('for_rechamar_noanswer', 15)->nullable();
            $table->string('for_rechamar_busy', 15)->nullable();
            $table->float('for_venda_sms', 5, 4);
            $table->float('for_saldosms', 5, 2);
            $table->float('for_valor_dolar_hoje', 7, 4);
            $table->string('for_gravar_ligacoes', 1);
            $table->float('for_saldo0800cartoes', 9, 2);
            $table->integer('for_limite_lig_simultaneas', false);
            $table->string('for_dar_mensagem_numerica', 1);
            $table->string('for_prefixo_fax', 3);
            $table->string('for_sms_provedor_proprio', 1);
            $table->string('for_end_url_provedor_sms', 60);
            $table->string('for_login_provedor_sms', 20);
            $table->string('for_senha_provedor_sms', 20);
            $table->string('for_texto_ddi_sms', 4);
            $table->integer('for_banco2', false);
            $table->string('for_agencia2', 5);
            $table->string('for_conta2', 15);
            $table->integer('for_banco3', false);
            $table->string('for_agencia3', 5);
            $table->string('for_conta3', 15);
            $table->string('for_usar_portabilidade', 1);
            $table->integer('for_provedor_portabilidade', false);
            $table->string('for_portabilidade_senha', 50);
            $table->softDeletes();
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
