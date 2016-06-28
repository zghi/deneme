<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSektorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sektor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('adi', 50);
			$table->string('turu', 50);
			$table->string('nace_kodu', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sektor');
	}

}
