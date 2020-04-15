<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtaqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ataque', function(Blueprint $table)
		{
			$table->bigInteger('ata_id', true)->unsigned();
			$table->date('ata_data')->nullable();
			$table->time('ata_hora')->nullable();
			$table->string('ata_login', 15)->nullable()->default('');
			$table->string('ata_ip', 80)->nullable()->default('');
			$table->string('ata_temp', 50)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ataque');
	}

}
