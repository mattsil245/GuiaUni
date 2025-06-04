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
        Schema::create('alternativa', function (Blueprint $table) {
            $table->id('id');
            $table->text('texto');
            $table->unsignedBigInteger('pergunta_id');
            $table->unsignedBigInteger('perfil_id');

            $table->timestamps();

            $table->foreign('pergunta_id')->references('id')->on('pergunta')->onDelete('cascade');
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
        Schema::dropIfExists('alternativa');
    }
};
