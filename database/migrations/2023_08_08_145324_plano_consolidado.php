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
        Schema::create('plano_consolidado', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');
            $table->unsignedBigInteger('metas_id');
            
            $table->string('Natureza')->nullable();
            $table->string('Discriminacao')->nullable();
            $table->string('Discriminacao_outros')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Valor_concedente')->nullable();
            $table->string('Valor_proponente_financeira')->nullable();
            $table->string('Valor_proponente_nao_financeira')->nullable();

            $table->string('plano_consolidado_sit')->nullable();
            $table->string('plano_consolidado_obs')->nullable();


            $table->timestamps();
        
            $table->foreign('n_processo_id')->references('id')->on('n_processo')->onDelete('cascade');
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
        Schema::dropIfExists('plano_consolidado');

    }
};
