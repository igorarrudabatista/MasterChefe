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
        Schema::create('etapas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metas_id');
            
            $table->string('Especificacao_etapa')->nullable();
            $table->string('Quantidade_etapa')->nullable();
            $table->string('Unidade_medida_etapa')->nullable();

            $table->date('Inicio_etapa')->nullable();
            $table->date('Termino_etapa')->nullable();

            $table->string('Correcao_etapas_sit')->nullable();
            $table->string('Obs_etapas')->nullable();


            $table->timestamps();
        
            $table->foreign('metas_id')->references('id')->on('metas')->onDelete('cascade');
        });  
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etapas');
    }
};
