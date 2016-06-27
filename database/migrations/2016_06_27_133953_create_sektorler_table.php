<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSektorlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sektorler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi',50);
            $table->string('turu',50);
            $table->string('nace_kodu',50);
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
        Schema::drop('sektorler');
    }
}
