<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExtensionsTableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('extensions_table', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('context', 20)->default('');
			$table->string('exten', 20)->default('');
			$table->boolean('priority')->default(0);
			$table->string('app', 20)->default('');
			$table->string('appdata', 128)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('extensions_table');
	}

}
