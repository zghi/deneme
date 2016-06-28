<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiyatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fiyat', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('odeme_turu', 50);
			$table->string('parabirimi', 50);
			$table->string('kdv', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fiyat');
	}

}
