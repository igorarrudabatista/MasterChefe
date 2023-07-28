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
        Schema::create('projeto_conteudo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');

            $table->string('Titulo_Projeto_Conteudo')->nullable();  
            $table->string('Titulo_Projeto_Conteudo_sit')->nullable();  
            $table->string('Titulo_Projeto_Conteudo_obs')->nullable();  

            $table->string('Objeto_Projeto_Conteudo')->nullable();  
            $table->string('Objeto_Projeto_Conteudo_sit')->nullable();  
            $table->string('Objeto_Projeto_Conteudo_obs')->nullable();  

            $table->string('Obj_Geral_Projeto_Conteudo')->nullable();  
            $table->string('Obj_Geral_Projeto_Conteudo_sit')->nullable();  
            $table->string('Obj_Geral_Projeto_Conteudo_obs')->nullable();                          
            
            $table->string('Obj_especifico_Projeto_Conteudo')->nullable();  
            $table->string('Obj_especifico_Projeto_Conteudo_sit')->nullable();  
            $table->string('Obj_especifico_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Justificativa_Projeto_Conteudo')->nullable();  
            $table->string('Justificativa_Projeto_Conteudo_sit')->nullable();  
            $table->string('Justificativa_Projeto_Conteudo_obs')->nullable();  
            
            $table->longText('Contextualizacao_Projeto_Conteudo')->nullable();  
            $table->longText('Contextualizacao_Projeto_Conteudo_sit')->nullable();  
            $table->longText('Contextualizacao_Projeto_Conteudo_obs')->nullable();  
            
            $table->longText('Diagnostico_Projeto_Conteudo')->nullable();  
            $table->longText('Diagnostico_Projeto_Conteudo_sit')->nullable();  
            $table->longText('Diagnostico_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Importancia_Projeto_Conteudo')->nullable();  
            $table->string('Importancia_Projeto_Conteudo_sit')->nullable();  
            $table->string('Importancia_Projeto_Conteudo_obs')->nullable();  
            
            $table->longText('Caracterizacao_Projeto_Conteudo')->nullable();  
            $table->longText('Caracterizacao_Projeto_Conteudo_sit')->nullable();  
            $table->longText('Caracterizacao_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Publico_Alvo_Interno_Projeto_Conteudo')->nullable();  
            $table->string('Publico_Alvo_Interno_Projeto_Conteudo_sit')->nullable();  
            $table->string('Publico_Alvo_Interno_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Publico_Alvo_Externo_Projeto_Conteudo')->nullable();  
            $table->string('Publico_Alvo_Externo_Projeto_Conteudo_sit')->nullable();  
            $table->string('Publico_Alvo_Externo_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Problemas_Projeto_Conteudo')->nullable();  
            $table->string('Problemas_Projeto_Conteudo_sit')->nullable();  
            $table->string('Problemas_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Resultados_Projeto_Conteudo')->nullable();  
            $table->string('Resultados_Projeto_Conteudo_sit')->nullable();  
            $table->string('Resultados_Projeto_Conteudo_obs')->nullable();  
            
            $table->date('Inicio_Projeto_Conteudo')->nullable();  
            $table->date('Inicio_Projeto_Conteudo_sit')->nullable();  
            $table->date('Inicio_Projeto_Conteudo_obs')->nullable();  
            
            $table->date('Fim_Projeto_Conteudo')->nullable();  
            $table->date('Fim_Projeto_Conteudo_sit')->nullable();  
            $table->date('Fim_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('N_Emenda_Projeto_Conteudo')->nullable();  
            $table->string('N_Emenda_Projeto_Conteudo_sit')->nullable();  
            $table->string('N_Emenda_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Nome_Autor_Emenda_Projeto_Conteudo')->nullable();  
            $table->string('Nome_Autor_Emenda_Projeto_Conteudo_sit')->nullable();  
            $table->string('Nome_Autor_Emenda_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Valor_Repasse_Projeto_Conteudo')->nullable();  
            $table->string('Valor_Repasse_Projeto_Conteudo_sit')->nullable();  
            $table->string('Valor_Repasse_Projeto_Conteudo_obs')->nullable();  
            
            $table->string('Valor_Contrapartida_Projeto_Conteudo')->nullable();  
            $table->string('Valor_Contrapartida_Projeto_Conteudo_sit')->nullable();  
            $table->string('Valor_Contrapartida_Projeto_Conteudo_obs')->nullable();  
            
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
        Schema::dropIfExists('projeto_conteudo');
    }
};
