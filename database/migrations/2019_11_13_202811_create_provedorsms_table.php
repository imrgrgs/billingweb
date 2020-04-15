<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvedorsmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provedorsms', function(Blueprint $table)
		{
			$table->integer('psms_id', true);
			$table->string('psms_nome', 50)->default('');
			$table->string('psms_login', 20)->default('');
			$table->string('psms_senha', 20)->default('');
			$table->string('psms_string', 120)->default('');
			$table->char('psms_disponivel', 1)->default('n');
			$table->float('psms_saldo', 10, 4)->default(0.0000);
			$table->float('psms_vlrsms', 5, 4)->default(0.0000);
			$table->integer('psms_fornecedor_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provedorsms');
	}

}
