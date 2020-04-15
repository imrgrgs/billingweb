<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('server', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ip_number', 45)->unique('ip_number_UNIQUE');
			$table->string('type_access', 5);
			$table->string('alias', 45)->nullable();
			$table->string('ssh_user_access', 45)->nullable();
			$table->string('ssh_password_access', 45)->nullable();
			$table->string('ssh_port', 5)->nullable();
			$table->integer('admin_id')->nullable();
			$table->string('name', 45)->nullable();
			$table->text('description')->nullable();
			$table->dateTime('date_created')->nullable();
			$table->dateTime('date_updated')->nullable();
			$table->string('status', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('server');
	}

}
