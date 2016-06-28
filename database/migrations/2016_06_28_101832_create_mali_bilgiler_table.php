<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaliBilgilerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mali_bilgiler', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('firma_id');
			$table->integer('sirket_id');
			$table->integer('adres_id');
			$table->integer('vergidairesi_id');
			$table->string('vergi_numarası', 50);
			$table->string('yıllık_curosu', 50);
			$table->string('sermaye', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mali_bilgiler');
	}

}
