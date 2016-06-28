<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalısanlarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calısanlar', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('adi', 50);
			$table->string('soyadi', 50);
			$table->string('cinsiyet', 50);
			$table->integer('yas');
			$table->char('TC', 11);
			$table->string('calisma_gunleri', 50);
			$table->string('calisma_saatleri', 50);
			$table->string('profili', 50);
			$table->string('email', 50);
			$table->string('telefon', 50);
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
		Schema::drop('calısanlar');
	}

}
