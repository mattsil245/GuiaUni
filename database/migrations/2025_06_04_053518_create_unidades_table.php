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
        Schema::create('unidade', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->enum('tipo', ['sede', 'campus', 'polo EAD']); 
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);

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
        Schema::dropIfExists('unidade');
    }
};
