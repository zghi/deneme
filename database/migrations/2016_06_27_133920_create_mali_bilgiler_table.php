<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaliBilgilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mali_bilgiler', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('firma_id')->unsigned();
            $table->foreign('firma_id')->references('id')->on('firmalar')->onDelete('cascade');
            $table->integer('sirket_id')->unsigned();
            $table->foreign('sirket_id')->references('id')->on('sirketler')->onDelete('cascade');
            $table->integer('adres_id')->unsigned();
            $table->foreign('adres_id')->references('id')->on('adresler')->onDelete('cascade');
            $table->integer('vergi_dairesi_id')->unsigned();
            $table->foreign('vergi_dairesi_id')->references('id')->on('vergi_daireleri')->onDelete('cascade');
            $table->string('vergi_numarasi',50);
            $table->string('yillik_curosu',50);
            $table->string('sermaye',50);
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
        Schema::drop('mali_bilgiler');
    }
}
