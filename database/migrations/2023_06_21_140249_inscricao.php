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
        Schema::create('inscricao', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('dre_id')->constrained('dre')->onDelete('cascade');
            // $table->foreignId('ingredientes_id')->constrained('ingredientes')->onDelete('cascade');
            $table->foreignId('escola_id')->constrained('escola')->onDelete('cascade');
            $table->string('Nome')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Outros_ingredientes')->nullable();
            $table->string('Preparo')->nullable();
            $table->string('image')->nullable();
            $table->boolean('checkbox')->nullable();
   

             
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
        Schema::dropIfExists('inscricao');

    }
};