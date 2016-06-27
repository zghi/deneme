<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminler', function (Blueprint $table) {
             $table->increments('id');
            $table->string('adi');
            $table->string('password');
            $table->string('mail');
            $table->string('soyadi');
            $table->string('kullanici_adi');
            $table->char('super_user',1);
            $table->char('aktif',1);
            $table->date('date_created');
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
        Schema::drop('adminler');
    }
}
