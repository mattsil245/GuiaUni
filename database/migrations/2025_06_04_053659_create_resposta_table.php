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
        Schema::create('resposta', function (Blueprint $table) {
            $table->id('id');
            $table->dateTime('data_resposta');
            $table->unsignedBigInteger('teste_vocacional_id');
            $table->unsignedBigInteger('pergunta_id');
            $table->unsignedBigInteger('alternativa_id');

            $table->timestamps();

            $table->foreign('teste_vocacional_id')->references('id')->on('teste_vocacional')->onDelete('cascade');
            $table->foreign('pergunta_id')->references('id')->on('pergunta')->onDelete('cascade');
            $table->foreign('alternativa_id')->references('id')->on('alternativa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resposta');
    }
};
