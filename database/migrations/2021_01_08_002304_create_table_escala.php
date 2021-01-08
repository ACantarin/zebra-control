<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEscala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escala_partidas', function (Blueprint $table) {
            $table->bigIncrements('id_escala');
            $table->integer('id_partida');
            $table->integer('id_arbitro');
            $table->enum('posicao', ['R', 'U', 'LJ', 'HL', 'SJ', 'FJ', 'BJ', 'D'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escala_partidas');
    }
}
