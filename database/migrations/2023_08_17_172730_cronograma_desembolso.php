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
        Schema::create('cronograma_desembolso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');
             $table->unsignedBigInteger('metas_id');
            
            $table->string('ano')->nullable();
            $table->string('mes')->nullable();
            $table->string('fonte')->nullable();
            $table->string('valor_desembolso')->nullable();
           

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
        Schema::dropIfExists('cronograma_desembolso');
    }
};
