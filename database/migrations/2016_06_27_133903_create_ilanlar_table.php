<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIlanlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ilanlar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('firma_id')->unsigned();
            $table->foreign('firma_id')->references('id')->on('firmalar')->onDelete('cascade');
            $table->string('adi',50);
            $table->string('turu',50);
            $table->date('verilis_tarihi');
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
        Schema::drop('ilanlar');
    }
}
