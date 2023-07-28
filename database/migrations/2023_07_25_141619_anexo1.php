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
        Schema::create('doc_anexo1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');
            
            $table->string('N_proposta')->nullable();
            $table->string('N_proposta_sit')->nullable();
            $table->string('N_proposta_obs')->nullable();

            $table->string('Comp_Oficio')->nullable();
            $table->string('Comp_Oficio_sit')->nullable();
            $table->string('Comp_Oficio_obs')->nullable();
            
            $table->string('Comp_Assinado')->nullable();
            $table->string('Comp_Assinado_sit')->nullable();
            $table->string('Comp_Assinado_obs')->nullable();

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
        Schema::dropIfExists('doc_anexo1');
    }
};