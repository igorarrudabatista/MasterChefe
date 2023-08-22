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
        Schema::create('obras_equipamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');
            $table->unsignedBigInteger('Natureza_id');
            $table->unsignedBigInteger('Cidade_id');
            
            $table->string('Especificacao')->nullable();
            $table->string('Unidade')->nullable();
            $table->string('Qtd')->nullable();
            $table->string('Valor_unit')->nullable();
            $table->string('Local_destino')->nullable();
            $table->string('Propriedade')->nullable();
           

            $table->timestamps();
        
            $table->foreign('n_processo_id')->references('id')->on('n_processo')->onDelete('cascade');
            $table->foreign('Natureza_id')->references('id')->on('plano_consolidado')->onDelete('cascade');
            $table->foreign('Cidade_id')->references('id')->on('cidade')->onDelete('cascade');
        });  
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras_equipamentos');
    }
};
