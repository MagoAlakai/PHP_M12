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
            $table->unassignedBigInteger('team_1');
            $table->integer('result_1');
            $table->unassignedBigInteger('team_2');
            $table->integer('result_2');
            $table->string('stadium');
            $table->timestamps();

            //Foreign keys
            $table->foreign('team_1')->references('id')->on('teams');
            $table->foreign('team_2')->references('id')->on('teams');
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
