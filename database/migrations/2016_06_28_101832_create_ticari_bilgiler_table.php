<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicariBilgilerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticari_bilgiler', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ticaret_sicil_no', 50);
			$table->integer('ticaret_oda_id');
			$table->integer('ust_sektor_id');
			$table->integer('faliyet_sektor_id');
			$table->integer('firma_dep_id');
			$table->date('kurulus_tarihi');
			$table->integer('urettigi_markalar_id');
			$table->integer('sattigi_markalar_id');
			$table->integer('firma_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticari_bilgiler');
	}

}
