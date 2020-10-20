<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiretorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diretors', function (Blueprint $table) {
            $table->id();
            $table->integer('id_filme')->unsigned();
            $table->foreign('id_filme')->references('id')->on('filmes'); 
            $table->string('nome_diretor', 255)->nullable()->default('text');
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
        Schema::dropIfExists('diretors');
    }
}
