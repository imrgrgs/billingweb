<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('usr_id', true);
			$table->integer('usr_fornecedor_id')->default(0);
			$table->integer('usr_representante_id')->default(0);
			$table->integer('usr_agente_id')->default(0);
			$table->string('usr_login', 15)->default('');
			$table->string('usr_senha', 15)->default('');
			$table->char('usr_status', 1)->default('');
			$table->text('usr_permissao', 16777215);
			$table->char('usr_linguagem', 1)->default('');
			$table->string('usr_nome', 40)->default('');
			$table->integer('usr_tpmenu_id')->default(0);
			$table->integer('usr_admin_id')->default(0);
			$table->bigInteger('usr_assinante_id')->default(0);
			$table->string('usr_foto', 256)->nullable();
			$table->string('usr_email', 256)->nullable();
			$table->string('usr_fone', 13)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
