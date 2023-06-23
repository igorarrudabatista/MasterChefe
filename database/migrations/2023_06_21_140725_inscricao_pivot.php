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
        Schema::create('inscricao_pivot', function (Blueprint $table) {
            
            $table->integer('Quantidade');
            
            $table->unsignedInteger('inscricao_id');
            $table->foreign('inscricao_id')->references('id')->on('inscricao')->onDelete('cascade');
               
            $table->unsignedInteger('ingredientes_id');
            $table->foreign('ingredientes_id')->references('id')->on('ingredientes')->onDelete('cascade');




            // $table->foreign('pessoa_id')->references('id')->on('pessoa');
            // $table->foreign('ingredientes_id'  )->references('id')->on('ingredientes');
    
            // $table->unsignedInteger('pessoa_id');
            // $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade');
               
            // $table->unsignedInteger('ingredientes_id');
            // $table->foreign('ingredientes_id')->references('id')->on('ingredientes')->onDelete('cascade');
         });
     }
    

    public function down()
    {
        Schema::dropIfExists('inscricao_pivot');
    }
};
