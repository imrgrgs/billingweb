<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSipBuddiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sip_buddies', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 80)->default('')->unique('name');
			$table->string('accountcode', 20)->nullable();
			$table->string('amaflags', 7)->nullable();
			$table->string('callgroup', 10)->nullable();
			$table->string('callerid', 80)->nullable();
			$table->char('canreinvite', 3)->nullable()->default('yes');
			$table->string('context', 80)->nullable();
			$table->string('defaultip', 15)->nullable();
			$table->string('dtmfmode', 7)->nullable();
			$table->string('fromuser', 80)->nullable();
			$table->string('fromdomain', 80)->nullable();
			$table->string('host', 31)->default('');
			$table->string('insecure', 4)->nullable();
			$table->char('language', 2)->nullable();
			$table->string('mailbox', 50)->nullable();
			$table->string('md5secret', 80)->nullable();
			$table->string('nat', 5)->default('no');
			$table->string('deny', 95)->nullable();
			$table->string('permit', 95)->nullable();
			$table->string('mask', 95)->nullable();
			$table->string('pickupgroup', 10)->nullable();
			$table->string('port', 5)->default('');
			$table->char('qualify', 3)->nullable();
			$table->char('restrictcid', 1)->nullable();
			$table->char('rtptimeout', 3)->nullable();
			$table->char('rtpholdtimeout', 3)->nullable();
			$table->string('secret', 80)->nullable();
			$table->string('type', 6)->default('friend');
			$table->string('username', 80)->default('');
			$table->string('disallow', 100)->nullable()->default('all');
			$table->string('allow', 100)->nullable()->default('g729;ilbc;gsm;ulaw;alaw');
			$table->string('musiconhold', 100)->nullable();
			$table->integer('regseconds')->default(0);
			$table->string('ipaddr', 15)->default('');
			$table->string('regexten', 80)->default('');
			$table->char('cancallforward', 3)->nullable()->default('yes');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sip_buddies');
	}

}
