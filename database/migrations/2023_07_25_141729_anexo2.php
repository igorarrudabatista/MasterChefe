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
        Schema::create('doc_anexo2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_processo_id');

            $table->string('Doc_Anexo2_Anexo1')->nullable();
            $table->string('Doc_Anexo2_Anexo1_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo1_obs')->nullable();
            
            $table->string('Doc_Anexo2_Anexo2')->nullable();
            $table->string('Doc_Anexo2_Anexo2_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo2_obs')->nullable();

            $table->string('Doc_Anexo2_Anexo3')->nullable();
            $table->string('Doc_Anexo2_Anexo3_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo3_obs')->nullable();

            $table->string('Doc_Anexo2_Anexo4')->nullable();
            $table->string('Doc_Anexo2_Anexo4_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo4_obs')->nullable();

            $table->string('Doc_Anexo2_Anexo5')->nullable();
            $table->string('Doc_Anexo2_Anexo5_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo5_obs')->nullable();

            $table->string('Doc_Anexo2_Anexo6')->nullable();
            $table->string('Doc_Anexo2_Anexo6_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo6_obs')->nullable();

            $table->string('Doc_Anexo2_Anexo7')->nullable();
            $table->string('Doc_Anexo2_Anexo7_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo7_obs')->nullable();

            $table->string('Doc_Anexo2_Anexo8')->nullable();
            $table->string('Doc_Anexo2_Anexo8_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo8_obs')->nullable();
            
            $table->string('Doc_Anexo2_Anexo9')->nullable();
            $table->string('Doc_Anexo2_Anexo9_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo9_obs')->nullable();
            
            $table->string('Doc_Anexo2_Anexo10')->nullable();
            $table->string('Doc_Anexo2_Anexo10_sit')->nullable();
            $table->string('Doc_Anexo2_Anexo10_obs')->nullable();
            
            $table->string('Doc_Anexo2_Anexo11')->nullable();        
            $table->string('Doc_Anexo2_Anexo11_sit')->nullable();        
            $table->string('Doc_Anexo2_Anexo11_obs')->nullable();        
            
            $table->string('Doc_Anexo2_Anexo12')->nullable();        
            $table->string('Doc_Anexo2_Anexo12_sit')->nullable();        
            $table->string('Doc_Anexo2_Anexo12_obs')->nullable();        
            
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
        Schema::dropIfExists('doc_anexo2');
    }
};
