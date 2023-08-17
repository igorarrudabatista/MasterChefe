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
        Schema::create('plano_detalhado', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');
            $table->unsignedBigInteger('Natureza_id');

            $table->string('Natureza_detalhado')->nullable();
            $table->string('Produto_Servico_detalhado')->nullable();
            $table->string('Unidade_medida_detalhado')->nullable();
            $table->string('Quantidade_detalhado')->nullable();
            $table->string('Valor_unit_detalhado')->nullable();

            $table->string('plano_detalhado_sit')->nullable();
            $table->string('plano_detalhado_obs')->nullable();


            $table->timestamps();
        
            $table->foreign('n_processo_id')->references('id')->on('n_processo')->onDelete('cascade');
            $table->foreign('Natureza_id')->references('id')->on('plano_consolidado')->onDelete('cascade');
        });  
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plano_detalhado');
    }
};
