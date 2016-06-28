<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFirmalarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firmalar', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('adi', 50);
			$table->integer('sektor_id');
			$table->string('telefon', 50);
			$table->string('unvan', 50);
			$table->integer('adres_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('firmalar');
	}

}
