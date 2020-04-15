<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planos', function(Blueprint $table)
		{
			$table->increments('pln_id');
			$table->string('pln_descricao', 40)->nullable();
			$table->float('pln_adesao')->nullable();
			$table->float('pln_mensalidade')->default(0.00);
			$table->integer('pln_limite_fixo')->unsigned()->nullable();
			$table->integer('pln_limite_celular')->nullable();
			$table->char('pln_status', 1)->nullable();
			$table->text('pln_detalhes', 16777215);
			$table->text('pln_geral', 16777215)->nullable();
			$table->binary('pln_imagem1');
			$table->binary('pln_imagem2');
			$table->binary('pln_imagem3');
			$table->string('pln_extensao1', 4)->default('');
			$table->string('pln_extensao2', 4)->default('');
			$table->string('pln_extensao3', 4)->default('');
			$table->float('pln_vlrfixo_excedente', 8, 4)->nullable();
			$table->float('pln_vlrcel_excedente', 8, 4)->nullable();
			$table->integer('pln_representante_id')->unsigned()->nullable();
			$table->char('pln_sem_limites', 1)->nullable()->default('n');
			$table->char('pln_bloquear_atingiu_franquia', 1)->default('n');
			$table->integer('pln_tabespecial_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planos');
	}

}
