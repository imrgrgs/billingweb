<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBvaudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bvaudio', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('originalName', 250)->comment('Nome original do audio, com extensão');
			$table->integer('size')->nullable();
			$table->bigInteger('time')->nullable();
			$table->string('generatedName', 250);
			$table->string('generatedPath', 250);
			$table->string('gsmName', 250)->nullable();
			$table->string('gsmPath', 250)->nullable();
			$table->integer('forId')->nullable();
			$table->integer('repId')->nullable();
			$table->integer('usrId')->nullable();
			$table->dateTime('dateCreated')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bvaudio');
	}

}
