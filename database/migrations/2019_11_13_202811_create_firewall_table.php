<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFirewallTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firewall', function(Blueprint $table)
		{
			$table->integer('frw_id');
			$table->string('frw_ip', 15)->primary();
			$table->string('frw_status', 1);
			$table->dateTime('frw_data');
			$table->text('frw_motivo', 65535);
			$table->index(['frw_status','frw_data'], 'frw_status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('firewall');
	}

}
