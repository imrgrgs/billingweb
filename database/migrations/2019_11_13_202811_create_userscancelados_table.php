<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserscanceladosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userscancelados', function(Blueprint $table)
		{
			$table->bigInteger('ID')->unsigned()->default(0)->unique('ID');
			$table->string('username', 15)->default('')->unique('username');
			$table->string('password', 12)->default('');
			$table->string('name', 50)->default('');
			$table->string('end1', 50)->default('');
			$table->string('end2', 50)->default('');
			$table->string('cep', 8)->default('');
			$table->string('cidade', 50)->default('');
			$table->string('bairro', 50)->default('');
			$table->string('pais', 50)->default('');
			$table->integer('tipo')->unsigned()->default(0);
			$table->char('ddd', 2)->default('');
			$table->string('fone', 9)->default('');
			$table->char('sipddd', 2)->default('');
			$table->string('sipfone', 9)->default('');
			$table->boolean('voicemail')->default(0);
			$table->string('email', 60)->default('')->index('email');
			$table->string('softphone', 50)->default('');
			$table->date('datacadastro')->default('0000-00-00');
			$table->time('horacadastro')->default('00:00:00');
			$table->char('atualizado', 1)->nullable();
			$table->string('empresa', 50)->nullable();
			$table->string('ramoatividade', 50)->nullable();
			$table->char('mostrar_lista', 1)->nullable();
			$table->char('mostrar_ativo', 1)->nullable();
			$table->char('estado', 2)->nullable();
			$table->boolean('status')->default(0);
			$table->boolean('qtdeemail')->nullable();
			$table->date('dtnewsletter')->nullable();
			$table->string('ip', 15)->nullable();
			$table->dateTime('dtultonline')->nullable();
			$table->string('convencional', 50)->nullable();
			$table->binary('foto', 16777215)->nullable();
			$table->string('extensao', 4)->nullable();
			$table->string('telefone1', 13)->nullable();
			$table->string('telefone2', 13)->nullable();
			$table->string('telefone3', 13)->nullable();
			$table->string('fax', 13)->nullable();
			$table->char('tp_pessoa', 1)->nullable();
			$table->string('cnpj_cpf', 14)->nullable();
			$table->integer('representante_id')->unsigned()->nullable()->default(0);
			$table->float('percacrescimo', 6, 3)->default(0.000);
			$table->char('mudasenha', 1)->default('');
			$table->char('server1', 1)->default(0);
			$table->string('server2', 20)->default('0');
			$table->date('server3')->default('0000-00-00');
			$table->string('tempos', 20)->default('0');
			$table->char('pode_atualizar', 1)->default(0);
			$table->integer('aparelho_id')->default(0);
			$table->string('login_agente', 12)->default('');
			$table->char('avisar_fimcreditos', 1)->default('');
			$table->string('login_grupo', 15)->default('');
			$table->char('prepos', 1)->default('');
			$table->integer('plano_id')->unsigned()->default(0);
			$table->string('senha_painel', 12)->default('');
			$table->float('vlr_fixo', 10, 4)->default(0.0000);
			$table->float('vlr_celular', 10, 4)->default(0.0000);
			$table->char('liberar_fixo', 1)->default('');
			$table->char('liberar_celular', 1)->default('');
			$table->integer('ligacoes_simultaneas')->nullable()->default(1);
			$table->char('pode_mudar_senha_ata', 1)->nullable();
			$table->char('protocolo', 1)->nullable();
			$table->char('master', 1)->default('n');
			$table->string('alias', 12)->nullable();
			$table->string('email2', 120)->nullable();
			$table->char('voiptovoip', 1)->nullable()->default('n');
			$table->float('valor_voiptovoip')->nullable()->default(0.00);
			$table->char('linguagem', 1)->nullable()->default(1);
			$table->integer('tabelaespecial_id')->unsigned()->nullable()->default(0);
			$table->float('vlr_mensalidade', 7)->default(0.00);
			$table->integer('dia_cobrar_mensalidade')->unsigned()->default(0);
			$table->float('vlr_avisar_fim_cred', 7)->default(0.00);
			$table->char('liberar_ddi', 1)->default('s');
			$table->char('limitar_voiptovoip_vlr', 1)->default('n');
			$table->char('creditos_vencem', 1)->default('n');
			$table->date('dt_vencer_creditos')->default('0000-00-00');
			$table->char('ligar_semddd', 2)->default('');
			$table->integer('tempo_maximo_ligacoes')->default(0);
			$table->string('siga_me', 15)->default('');
			$table->integer('dialplain_qtdeliminar')->default(0);
			$table->string('dialplain_adicionar', 10)->default('');
			$table->integer('pin_number')->default(0);
			$table->char('user_cabine', 1)->default('n');
			$table->integer('id_cabine')->default(0);
			$table->string('mac_address', 24)->default('');
			$table->string('tp_tarifacao', 4)->default('');
			$table->string('nrserie_ata', 24)->default('');
			$table->char('gravar_chamadas', 1)->default('n');
			$table->string('assinante_indicador', 15)->default('');
			$table->float('comissao_indicador', 5)->default(0.00);
			$table->char('mostrar_valores', 1)->default('s');
			$table->char('tp_protocolo', 1)->default('s');
			$table->float('taxa_conexao', 5)->default(0.00);
			$table->float('taxa_desconexao', 5)->default(0.00);
			$table->char('retornar_callingcard', 1)->default('n');
			$table->char('ligacao_callback', 1)->default('a');
			$table->integer('sgs_comecar_cobrar')->default(0);
			$table->integer('sgs_comecar_cobrar_celular')->default(0);
			$table->char('ddd_a_bloquear', 2)->default('');
			$table->char('bloquear_fixo_celular_todas', 1)->default('');
			$table->integer('gruposvoip_id')->default(0);
			$table->timestamp('dt_ult_reducao_simultaneas')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->char('qualify', 1)->default('s');
			$table->integer('tech_prefix')->default(0);
			$table->integer('dialplain_diferenciado_inter_eliminar')->default(0);
			$table->char('usa_4003', 1)->nullable();
			$table->float('venda_4003', 7, 4)->default(0.1100);
			$table->float('venda_0800_fixo', 7, 4)->default(0.2900);
			$table->float('venda_0800_celular', 7, 4)->default(0.9500);
			$table->char('socobrar_4003_secompletar', 1)->default('n');
			$table->char('cobrar_4003_emumatarifaso', 1)->default('n');
			$table->char('tipo_lig_permitidas_4003', 1)->default('n');
			$table->string('tp_tarifacao_4003', 4)->default('6006');
			$table->char('usa_sms', 1)->default('n');
			$table->float('venda_sms', 7, 4)->default(0.0000);
			$table->integer('usr_terminacao_id')->default(0);
			$table->integer('usr_terminacao2_id')->default(0);
			$table->integer('usr_terminacao3_id')->default(0);
			$table->integer('usr_terminacao_cel_id')->default(0);
			$table->integer('usr_terminacao2_cel_id')->default(0);
			$table->integer('usr_terminacao3_cel_id')->default(0);
			$table->integer('usr_terminacao_int_id')->default(0);
			$table->integer('usr_terminacao2_int_id')->default(0);
			$table->integer('usr_terminacao3_int_id')->default(0);
			$table->char('falar_saldo', 1)->default('n');
			$table->char('tipo_cliente', 1)->default('n');
			$table->float('valor_contacorrente', 7)->default(0.00);
			$table->char('pode_ficar_negativo', 1)->default('n');
			$table->text('usr_observacoes', 16777215);
			$table->char('enviar_calerid', 1)->default('s');
			$table->float('limite_ficar_negativo', 7)->default(0.00);
			$table->string('pode_transferir', 1)->default('s');
			$table->string('reinvite_audio', 1)->default('n');
			$table->integer('taxa_conexao_segundos')->default(0);
			$table->integer('taxa_desconexao_segundos')->default(0);
			$table->integer('tabelaespecial_callingcard_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userscancelados');
	}

}
