<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFirmadepartmanlarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firmadepartmanlar', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('firma_id');
			$table->integer('dep_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('firmadepartmanlar');
	}

}
