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
        {
            Schema::create('pesquisa_mercadologica_pivot', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('pesquisa_mercadologica_id');

                $table->string('Empresa')->nullable();
                $table->decimal('Valor')->nullable();
                $table->string('Anexo')->nullable();           
                                   
                $table->timestamps();
                $table->foreign('pesquisa_mercadologica_id')->references('id')->on('pesquisa_mercadologica')->onDelete('cascade');

            });  
        
        }
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesquisa_mercadologica_pivot');
    }
};
