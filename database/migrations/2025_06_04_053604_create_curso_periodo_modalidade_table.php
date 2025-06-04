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
        Schema::create('curso_periodo_modalidade', function (Blueprint $table) {
            $table->id('id');
            $table->decimal('mensalidade', 10, 2);

            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('modalidade_id');
            $table->unsignedBigInteger('periodo_id');

            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade');
            $table->foreign('modalidade_id')->references('id')->on('modalidade')->onDelete('cascade');
            $table->foreign('periodo_id')->references('id')->on('periodo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_periodo_modalidade');
    }
};
