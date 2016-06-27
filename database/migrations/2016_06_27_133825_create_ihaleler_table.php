<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIhalelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ihaleler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi',50);
            $table->string('aciklama',50);
            $table->string('turu',50);
            $table->integer('maliyet');
            $table->string('usulu',50);
            $table->date('ihale_suresi');
            $table->date('tarih');
            $table->integer('firma_id')->unsigned();
            $table->foreign('firma_id')->references('id')->on('firmalar')->onDelete('cascade');
            $table->string('sözlesme_turu',50);
            $table->string('teslim_yeri',50);
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
        Schema::drop('ihaleler');
    }
}
