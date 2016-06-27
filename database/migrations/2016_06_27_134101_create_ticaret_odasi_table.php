<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicaretOdasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticaret_odasi', function (Blueprint $table) {
              $table->increments('id');
            $table->integer('il_id')->unsigned();
            $table->foreign('il_id')->references('id')->on('iller')->onDelete('cascade');
            $table->string('adi',50);
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
        Schema::drop('ticaret_odasi');
    }
}
