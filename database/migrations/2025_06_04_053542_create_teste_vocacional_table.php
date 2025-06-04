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
        Schema::create('teste_vocacional', function (Blueprint $table) {
            $table->id('id');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->unsignedBigInteger('usuario_id');

            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teste_vocacional');
    }
};
