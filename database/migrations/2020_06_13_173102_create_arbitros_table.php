<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registro');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('apelido');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cep');
            $table->string('celular');
            $table->string('tel_fixo');
            $table->string('email');
            $table->enum('referee', ['1','0'])->default('0');
            $table->enum('umpire', ['1','0'])->default('0');
            $table->enum('line_judge', ['1','0'])->default('0');
            $table->enum('head_linesman', ['1','0'])->default('0');
            $table->enum('side_judge', ['1','0'])->default('0');
            $table->enum('field_judge', ['1','0'])->default('0');
            $table->enum('back_judge', ['1','0'])->default('0');
            $table->enum('delegate', ['1','0'])->default('0');
            $table->enum('deleted', ['1','0'])->default('0');
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
        Schema::dropIfExists('arbitros');
    }
}
