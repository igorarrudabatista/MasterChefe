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
        Schema::create('dre', function (Blueprint $table) {
            $table->id();
            $table->string('Nome')->nullable();
            $table->string('Tel')->nullable();
            $table->string('Email')->nullable();
            $table->string('Endereco')->nullable();
            $table->string('Numero')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cep')->nullable();
            // $table->foreignId('cidade_id')->constrained('cidade')->onDelete('cascade');
            // $table->foreignId('estado_id')->constrained('estado')->onDelete('cascade');

            // $table->foreign('cidade_id')->references('id')->on('cidade')->onDelete('cascade');
            // $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');
            
            // $table->unsignedInteger('aluno_id');
            // $table->foreign('aluno_id')->references('id')->on('aluno');                 
             
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dre');

    }
};
