<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adres', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('firma_id');
			$table->integer('il_id');
			$table->integer('ilce_id');
			$table->char('posta_kodu', 5);
			$table->string('adres', 128);
			$table->string('turu', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adres');
	}

}
