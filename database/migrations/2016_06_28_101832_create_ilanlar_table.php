<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIlanlarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ilanlar', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('firma_id');
			$table->string('adi', 50);
			$table->string('turu', 50);
			$table->date('verilis_tarihi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ilanlar');
	}

}
