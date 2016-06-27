<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicariBilgilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticari_bilgiler', function (Blueprint $table) {
             $table->increments('id');
             $table->string('ticaret_sicil_no',50);
            $table->integer('ticaret_oda_id')->unsigned();
            $table->foreign('ticaret_oda_id')->references('id')->on('ticaret_odasi')->onDelete('cascade');
            $table->integer('ust_sektor_id')->unsigned();
            $table->foreign('ust_sektor_id')->references('id')->on('sektorler')->onDelete('cascade');
            $table->integer('faliyet_sektor_id')->unsigned();
            $table->foreign('faliyet_sektor_id')->references('id')->on('sektorler')->onDelete('cascade');
            $table->integer('firma_dep_id')->unsigned();
            $table->foreign('firma_dep_id')->references('id')->on('firma_departmanlar')->onDelete('cascade'); 
            $table->date('kurulus_tarihi');
            $table->integer('urettigi_markalar_id')->unsigned();
            $table->foreign('urettigi_markalar_id')->references('id')->on('markalar')->onDelete('cascade');
            $table->integer('sattigi_markalar_id')->unsigned();
            $table->foreign('sattigi_markalar_id')->references('id')->on('markalar')->onDelete('cascade');
            $table->integer('firma_id')->unsigned();
            $table->foreign('firma_id')->references('id')->on('firmalar')->onDelete('cascade');
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
        Schema::drop('ticari_bilgiler');
    }
}
