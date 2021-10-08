<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHairstyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hairstyle', function (Blueprint $table) {
            $table->bigIncrements('haicodigo');
            $table->integer('haicliente');
            $table->string('haisize');
            $table->string('haitype');
            $table->time('haieventtime');
            $table->time('haidistime');
            $table->time('haiexetime');
            $table->timestamp('haidaytime');
            $table->boolean('haistatus');
            $table->string('haicancelDesc')->nullable();
            $table->boolean('haitest');
            $table->timestamp('haitestdaytime')->nullable();
            $table->timestamps();
            $table->foreign('haicliente')->references('clicodigo')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hairstyle');
    }
}
