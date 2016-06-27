<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalisanlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calisanlar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->string('soyadi');
            $table->string('cinsiyet');
            $table->integer('yas');
            $table->string('TC');
            $table->string('calisma_gunleri');
            $table->string('profili');
            $table->string('email');
            $table->string('telefon');  
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
        Schema::drop('calisanlar');
    }
}
