<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filme')->unsigned();
            $table->foreign('id_filme')->references('id')->on('filmes');  
            $table->integer('classificacao')->unsigned()->nullable()->default(12);
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
        Schema::dropIfExists('classificacoes');
    }
}
