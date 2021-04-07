<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TODO: crear la base de datos y hacer migrate:fresh
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('stadium');
            $table->integer('team_1');
            $table->integer('result_1');
            $table->integer('team_2');
            $table->integer('result_2');
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
        Schema::dropIfExists('partidos');
    }
}
