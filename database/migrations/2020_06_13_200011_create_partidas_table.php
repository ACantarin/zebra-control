<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mandante');
            $table->string('mandante_id');
            $table->string('visitante');
            $table->string('visitante_id');
            $table->string('pontos_mandante');
            $table->string('pontos_visitante');
            $table->dateTime('data');
            $table->string('horario');
            $table->string('endereco');
            $table->string('numero');
            $table->string('referee_nome');
            $table->string('referee_id');
            $table->string('umpire_nome');
            $table->string('umpire_id');
            $table->string('line_judge_nome');
            $table->string('line_judge_id');
            $table->string('head_linesman_nome');
            $table->string('head_linesman_id');
            $table->string('side_judge_nome');
            $table->string('side_judge_id');
            $table->string('field_judge_nome');
            $table->string('field_judge_id');
            $table->string('back_judge_nome');
            $table->string('back_judge_id');
            $table->string('delegado_nome');
            $table->string('delegado_id');
            $table->enum('realizado', ['1','0'])->default('0');
            $table->string('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partidas', function (Blueprint $table) {
            //
        });
    }
}
