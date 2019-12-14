<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->bigInteger('turma_id')->unsigned();
            $table->integer('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->timestamps();

            $table->foreign('turma_id')
                ->references('id')
                ->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
