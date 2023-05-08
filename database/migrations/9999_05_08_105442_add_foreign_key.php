<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            // VERSIONE 1
            // $table->bigInteger('type_id')->unsigned();
            // $table->foreign('type_id')
            //     ->references('id')
            //     ->on('types');
            // VERSIONE 2
            $table->foreignId('type_id')->constrained();
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
};
