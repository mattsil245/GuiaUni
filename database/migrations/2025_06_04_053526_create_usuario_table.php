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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('nome');
            $table->date('data_nasc');
            
            $table->unsignedBigInteger('endereco_id');
            
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('endereco_usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
