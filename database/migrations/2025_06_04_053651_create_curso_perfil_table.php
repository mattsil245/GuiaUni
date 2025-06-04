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
        Schema::create('curso_perfil', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('nome_curso_id');
            $table->unsignedBigInteger('perfil_id');

            $table->timestamps();

            $table->foreign('nome_curso_id')->references('id')->on('nome_curso')->onDelete('cascade');
            $table->foreign('perfil_id')->references('id')->on('perfil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_perfil');
    }
};
