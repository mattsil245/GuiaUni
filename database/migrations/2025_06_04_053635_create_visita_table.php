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
        Schema::create('visita', function (Blueprint $table) {
            $table->id('id');
            $table->string('identificador');
            $table->enum('tipo', ['curso', 'instituicao']);
            $table->date('data');
            
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('instituicao_id')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();

            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('set null');
            $table->foreign('instituicao_id')->references('id')->on('instituicao')->onDelete('set null');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita');
    }
};
