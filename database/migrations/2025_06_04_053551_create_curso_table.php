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
        Schema::create('curso', function (Blueprint $table) {
            $table->id('id');
            $table->enum('grau', ['Tecnólogo', 'Bacharelado', 'Pós-Graduação', 'Licenciatura']);
            $table->string('descricao', 2000);
            $table->string('imagem')->nullable();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('instituicao_id');
            $table->unsignedBigInteger('nome_curso_id');

            $table->timestamps();

            $table->foreign('instituicao_id')->references('id')->on('instituicao')->onDelete('cascade');
            $table->foreign('nome_curso_id')->references('id')->on('nome_curso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
};
