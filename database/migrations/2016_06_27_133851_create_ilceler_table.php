<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIlcelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ilceler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi',50);
            $table->integer('il_id')->unsigned();
            $table->foreign('il_id')->references('id')->on('iller')->onDelete('cascade');
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
        Schema::drop('ilceler');
    }
}
