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
        Schema::create('instituicao', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('razao_social');
            $table->char('cnpj', 14)->unique();
            $table->string('logo_url')->nullable();
            $table->string('site')->nullable();
            $table->string('telefone')->nullable();
            $table->enum('status', ['ativo', 'inativo', 'pendente', 'bloqueada'])->default('ativo');
            $table->string('email')->nullable()->unique();
            $table->string('senha');
            $table->string('slug')->unique();
            $table->decimal('nota_mec', 3, 1)->nullable();
            $table->integer('tamanho')->nullable();
            $table->integer('ano_fundacao')->nullable();
            $table->integer('alunos_matriculados')->nullable();
            $table->integer('docentes')->nullable();
            $table->string('video_url')->nullable();

            $table->unsignedBigInteger('modelo_descricao_id')->nullable();
            $table->unsignedBigInteger('modelo_sobre_id')->nullable();
            $table->unsignedBigInteger('tipo_instituicao_id')->nullable();

            $table->timestamps();

            $table->foreign('modelo_descricao_id')->references('id')->on('modelo_descricao')->onDelete('set null');
            $table->foreign('modelo_sobre_id')->references('id')->on('modelo_sobre')->onDelete('set null');
            $table->foreign('tipo_instituicao_id')->references('id')->on('tipo_instituicao')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituicao');
    }
};
