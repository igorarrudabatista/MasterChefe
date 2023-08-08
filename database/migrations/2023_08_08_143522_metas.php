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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');
            
            $table->string('Especificacao_metas')->nullable();
            $table->string('Quantidade_metas')->nullable();
            $table->string('Unidade_medida_metas')->nullable();
            
            $table->date('Inicio_metas')->nullable();
            $table->date('Termino_metas')->nullable();
            
            $table->string('Correcao_metas_sit')->nullable();
            $table->string('Obs_metas')->nullable();

            $table->timestamps();
        
            $table->foreign('n_processo_id')->references('id')->on('n_processo')->onDelete('cascade');
        });  
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas');
    }
};
