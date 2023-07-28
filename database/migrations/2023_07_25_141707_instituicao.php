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
            $table->id();
            $table->unsignedBigInteger('n_processo_id');

            $table->string('Nome_Instituicao')->nullable();
            $table->string('Nome_Instituicao_sit')->nullable();
            $table->string('Nome_Instituicao_obs')->nullable();
            
            $table->string('Endereco_Instituicao')->nullable();
            $table->string('Endereco_Instituicao_sit')->nullable();
            $table->string('Endereco_Instituicao_obs')->nullable();
        
            $table->string('Telefone_Instituicao')->nullable();
            $table->string('Telefone_Instituicao_sit')->nullable();
            $table->string('Telefone_Instituicao_obs')->nullable();

            $table->string('CNPJ_Instituicao')->nullable();
            $table->string('CNPJ_Instituicao_sit')->nullable();
            $table->string('CNPJ_Instituicao_obs')->nullable();

            $table->string('Email_Instituicao')->nullable();
            $table->string('Email_Instituicao_sit')->nullable();
            $table->string('Email_Instituicao_obs')->nullable();

            $table->string('Anexo1_Instituicao')->nullable();
            $table->string('Anexo1_Instituicao_sit')->nullable();
            $table->string('Anexo1_Instituicao_obs')->nullable();

            $table->string('Anexo2_Instituicao')->nullable();
            $table->string('Anexo2_Instituicao_sit')->nullable();
            $table->string('Anexo2_Instituicao_obs')->nullable();
            
            $table->foreign('n_processo_id')->references('id')->on('n_processo')->onDelete('cascade');
            
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
        Schema::dropIfExists('instituicao');
    }
};
