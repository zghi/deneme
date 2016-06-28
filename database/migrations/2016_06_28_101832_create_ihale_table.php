<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIhaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ihale', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('adi', 50);
			$table->string('aciklama', 50);
			$table->string('turu', 50);
			$table->integer('maliyet');
			$table->string('usulu', 50);
			$table->date('ihale_suresi');
			$table->date('tarih');
			$table->integer('firma_id');
			$table->string('sözlesme_turu', 50);
			$table->string('teslim_yeri', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ihale');
	}

}
