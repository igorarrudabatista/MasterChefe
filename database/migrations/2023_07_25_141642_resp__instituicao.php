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
        Schema::create('resp_instituicao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');

            $table->string('Nome_Resp_Instituicao')->nullable();
            $table->string('Nome_Resp_Instituicao_sit')->nullable();
            $table->string('Nome_Resp_Instituicao_obs')->nullable();

            $table->string('Cargo_Resp_Instituicao')->nullable();
            $table->string('Cargo_Resp_Instituicao_sit')->nullable();
            $table->string('Cargo_Resp_Instituicao_obs')->nullable();

            $table->string('End_Resp_Instituicao')->nullable();
            $table->string('End_Resp_Instituicao_sit')->nullable();
            $table->string('End_Resp_Instituicao_obs')->nullable();
            
            $table->string('Telefone_Resp_Instituicao')->nullable();
            $table->string('Telefone_Resp_Instituicao_sit')->nullable();
            $table->string('Telefone_Resp_Instituicao_obs')->nullable();
            
            $table->string('Email_Resp_Instituicao')->nullable();
            $table->string('Email_Resp_Instituicao_sit')->nullable();
            $table->string('Email_Resp_Instituicao_obs')->nullable();

            $table->string('Anexo1_Resp_Instituicao')->nullable();
            $table->string('Anexo1_Resp_Instituicao_sit')->nullable();
            $table->string('Anexo1_Resp_Instituicao_obs')->nullable();

            $table->string('Anexo2_Resp_Instituicao')->nullable();
            $table->string('Anexo2_Resp_Instituicao_sit')->nullable();
            $table->string('Anexo2_Resp_Instituicao_obs')->nullable();
            
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
        Schema::dropIfExists('resp_instituicao');
    }
};
