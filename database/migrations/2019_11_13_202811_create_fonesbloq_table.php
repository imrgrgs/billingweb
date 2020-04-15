<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFonesbloqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonesbloq', function(Blueprint $table)
		{
			$table->char('blq_telefone', 20)->default('');
			$table->integer('blq_user_id')->unsigned()->default(0);
			$table->unique(['blq_telefone','blq_user_id'], 'ppm_id');
			$table->primary(['blq_telefone','blq_user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fonesbloq');
	}

}
