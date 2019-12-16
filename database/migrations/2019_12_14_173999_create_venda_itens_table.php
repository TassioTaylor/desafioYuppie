<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('venda_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->decimal('preco',15,2);
            $table->integer('quantidade');
            $table->decimal('valorTotal', 10,2)->nullable();
            $table->integer('aluno_id');

            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos');

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
        Schema::dropIfExists('venda_itens');
    }
}
