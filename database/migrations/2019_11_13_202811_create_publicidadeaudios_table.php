<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicidadeaudiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicidadeaudios', function(Blueprint $table)
		{
			$table->increments('pbaud_id');
			$table->integer('pub_id')->unsigned();
			$table->integer('pbaud_seq')->unsigned();
			$table->char('pbaud_descricao', 50)->nullable();
			$table->char('pbaud_status', 1)->nullable();
			$table->char('pbaud_gingle_wav', 100)->nullable();
			$table->integer('pbaud_tempo_gingle')->unsigned()->nullable();
			$table->char('pbaud_checar_satisfacao', 1)->nullable();
			$table->char('pbaud_desvio_tipo', 1)->nullable();
			$table->integer('pbaud_desvio_chamar')->nullable();
			$table->index(['pub_id','pbaud_seq'], 'pbaud_byseq');
			$table->index(['pub_id','pbaud_id'], 'pbaud_pubid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicidadeaudios');
	}

}
