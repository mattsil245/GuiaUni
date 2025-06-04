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
        Schema::create('grade_curso', function (Blueprint $table) {
            $table->id('id');
            
            $table->unsignedBigInteger('semestre_id');
            $table->unsignedBigInteger('disciplina_id');
            
            $table->timestamps();

            $table->foreign('semestre_id')->references('id')->on('semestre')->onDelete('cascade');
            $table->foreign('disciplina_id')->references('id')->on('disciplina')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_curso');
    }
};
