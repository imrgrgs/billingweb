<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agentes', function(Blueprint $table)
		{
			$table->increments('age_id');
			$table->string('age_nome', 40)->nullable();
			$table->string('age_login', 12)->nullable();
			$table->string('age_senha', 12)->nullable();
			$table->float('age_comissao', 5)->nullable();
			$table->string('age_endereco', 40)->nullable();
			$table->string('age_bairro', 30)->nullable();
			$table->string('age_cidade', 30)->nullable();
			$table->char('age_estado', 2)->nullable();
			$table->integer('age_cep')->nullable();
			$table->string('age_email', 60)->nullable();
			$table->char('age_status', 1)->nullable();
			$table->date('age_data')->nullable();
			$table->string('age_telefone1', 13)->nullable();
			$table->string('age_telefone2', 13)->nullable();
			$table->string('age_celular', 13)->nullable();
			$table->char('age_mudasenha', 1)->nullable();
			$table->integer('age_representante_id')->unsigned()->nullable();
			$table->char('age_linguagem', 1)->nullable()->default(1);
			$table->char('age_incluir_users', 1)->default('s');
			$table->char('age_alterar_users', 1)->default('s');
			$table->char('age_acesso_cabines', 1)->default('n');
			$table->char('age_acesso_creditos', 1)->default('n');
			$table->integer('age_tabelaespecial_id')->default(0);
			$table->float('age_percacrescimo', 8, 4)->default(0.0000);
			$table->float('age_saldoreal', 10)->default(0.00);
			$table->char('age_atualizado', 1)->default('s');
			$table->string('age_tptarifacao', 4)->default('');
			$table->char('age_com_ident_nome', 1)->default('n');
			$table->char('age_ligacoes_emcurso', 1)->default('n');
			$table->char('age_liberar_inicializar', 1)->default('n');
			$table->char('age_controle_lastro', 1)->default('s');
			$table->char('age_qtde_colunas', 1)->default(2);
			$table->char('age_como_revenda', 1)->default('n');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agentes');
	}

}
