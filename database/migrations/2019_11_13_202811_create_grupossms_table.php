<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupossmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupossms', function(Blueprint $table)
		{
			$table->integer('gsms_id', true);
			$table->string('gsms_nome', 40)->default('');
			$table->integer('gsms_fornecedor_id')->default(0);
			$table->integer('gsms_representante_id')->default(0);
			$table->integer('gsms_assinante_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupossms');
	}

}
