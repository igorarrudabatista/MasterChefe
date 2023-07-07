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
        Schema::create('produto_recibo', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('Quantidade');
            $table->string('unidade');
    
            // $table->unsignedInteger('unidade_medidas_id');
            // $table->foreign('unidade_medidas_id')->references('id')->on('unidade_medidas')->onDelete('cascade');

            $table->unsignedInteger('recibo_id');
            $table->foreign('recibo_id')->references('id')->on('recibo')->onDelete('cascade');
               
            $table->unsignedInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
         });
     }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_recibo');
    }
};