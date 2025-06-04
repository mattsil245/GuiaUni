<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sugestao', function (Blueprint $table) {
            $table->id('id');
            $table->enum('categoria', ['Periodo', 'Modalidade', 'Curso']); // ajuste conforme categorias reais
            $table->string('descricao');
            $table->unsignedBigInteger('instituicao_id');
            
            $table->timestamps();

            $table->foreign('instituicao_id')->references('id')->on('instituicao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sugestao');
    }
};
