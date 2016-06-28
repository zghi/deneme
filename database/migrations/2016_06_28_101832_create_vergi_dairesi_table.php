<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVergiDairesiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vergi_dairesi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('il_id');
			$table->integer('ilce_id');
			$table->string('say_kod', 10);
			$table->string('adi', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vergi_dairesi');
	}

}
