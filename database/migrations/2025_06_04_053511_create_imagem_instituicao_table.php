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
        Schema::create('imagem_instituicao', function (Blueprint $table) {
            $table->id('id');
            $table->string('link_imagem');
            
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
        Schema::dropIfExists('imagem_instituicao');
    }
};
