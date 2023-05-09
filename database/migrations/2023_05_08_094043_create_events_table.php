<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('anno');
            $table->integer('mese');
            $table->integer('giorno');
            $table->integer('ora');
            $table->integer('minuto');
        });
    }


    public function down()
    {
        Schema::dropIfExists('events');
    }
};
