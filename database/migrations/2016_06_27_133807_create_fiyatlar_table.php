<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiyatlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiyatlar', function (Blueprint $table) {
             $table->increments('id');
            $table->string('odeme_turu',50);
            $table->string('parabirimi',50);
            $table->string('kdv',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fiyatlar');
    }
}
