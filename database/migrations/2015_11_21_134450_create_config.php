<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('palavras_chave');
            $table->string('titulo');
            $table->string('fan_page');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('skype');
            $table->string('lkdn');
            $table->string('fone');
            $table->string('endereco');
            $table->string('email');
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
        Schema::drop('configs');
    }
}
