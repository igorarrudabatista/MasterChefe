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
        Schema::create('resp_projeto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');

            $table->string('Nome_Resp_projeto')->nullable();
            $table->string('Nome_Resp_projeto_sit')->nullable();
            $table->string('Nome_Resp_projeto_obs')->nullable();

            $table->string('Cargo_Resp_projeto')->nullable();
            $table->string('Cargo_Resp_projeto_sit')->nullable();
            $table->string('Cargo_Resp_projeto_obs')->nullable();

            $table->string('Endereco_Resp_projeto')->nullable();
            $table->string('Endereco_Resp_projeto_sit')->nullable();
            $table->string('Endereco_Resp_projeto_obs')->nullable();

            $table->string('Telefone_Resp_projeto')->nullable();
            $table->string('Telefone_Resp_projeto_sit')->nullable();
            $table->string('Telefone_Resp_projeto_obs')->nullable();

            $table->string('Email_Resp_projeto')->nullable();
            $table->string('Email_Resp_projeto_sit')->nullable();
            $table->string('Email_Resp_projeto_obs')->nullable();


            $table->string('CPF_Resp_projeto')->nullable();
            $table->string('RG_Resp_projeto')->nullable();
            $table->string('Cidade_Resp_projeto')->nullable();
            $table->string('Estado_Resp_projeto')->nullable();


            $table->string('Anexo1_Resp_projeto')->nullable();
            $table->string('Anexo1_Resp_projeto_sit')->nullable();
            $table->string('Anexo1_Resp_projeto_obs')->nullable();

            $table->string('Anexo2_Resp_projeto')->nullable();
            $table->string('Anexo2_Resp_projeto_sit')->nullable();
            $table->string('Anexo2_Resp_projeto_obs')->nullable();
            
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
        Schema::dropIfExists('resp_projeto');
    }
};
