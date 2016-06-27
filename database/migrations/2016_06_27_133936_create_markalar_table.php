<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkalarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markalar', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('firma_id')->unsigned();
            $table->foreign('firma_id')->references('id')->on('firmalar')->onDelete('cascade');
            $table->string('adi');
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
        Schema::drop('markalar');
    }
}
