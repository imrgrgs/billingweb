<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentexuserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agentexuser', function(Blueprint $table)
		{
			$table->integer('agu_agente_id')->unsigned()->default(0)->index('agu_agente_id');
			$table->integer('agu_users_id')->unsigned()->default(0);
			$table->date('agu_data')->nullable();
			$table->primary(['agu_agente_id','agu_users_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agentexuser');
	}

}
