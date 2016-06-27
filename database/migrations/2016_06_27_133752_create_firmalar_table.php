<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmalarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmalar', function (Blueprint $table) {
              $table->increments('id');
            $table->string('adi');
            $table->integer('sektor_id')->unsigned();
            $table->foreign('sektor_id')->references('id')->on('sektorler')->onDelete('cascade');
            $table->string('telefon');
            $table->string('unvan');
            $table->integer('adres_id')->unsigned();
            $table->foreign('adres_id')->references('id')->on('adresler')->onDelete('cascade');
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
        Schema::drop('firmalar');
    }
}
