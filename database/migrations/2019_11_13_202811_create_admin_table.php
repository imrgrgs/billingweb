<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->increments('adm_id');
			$table->char('adm_razao', 50)->nullable();
			$table->char('adm_cnpj', 14)->default('');
			$table->char('adm_inscrest', 20)->default('');
			$table->char('adm_fantasia', 40)->default('');
			$table->char('adm_rua', 40)->nullable();
			$table->char('adm_complem', 30)->nullable();
			$table->char('adm_bairro', 30)->nullable();
			$table->char('adm_cidade', 30)->nullable();
			$table->char('adm_estado', 2)->nullable();
			$table->integer('adm_cep')->unsigned()->nullable();
			$table->char('adm_email', 60)->nullable();
			$table->integer('adm_banco')->unsigned()->nullable();
			$table->char('adm_agencia', 5)->nullable();
			$table->char('adm_conta', 15)->nullable();
			$table->float('adm_saldo', 10)->nullable();
			$table->char('adm_login', 14)->nullable();
			$table->char('adm_senha', 12)->nullable();
			$table->char('adm_mudasenha', 1)->nullable();
			$table->char('adm_telefone1', 13)->nullable();
			$table->char('adm_telefone2', 13)->nullable();
			$table->char('adm_celular', 13)->nullable();
			$table->date('adm_data')->default('0000-00-00');
			$table->char('adm_contato', 40)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
