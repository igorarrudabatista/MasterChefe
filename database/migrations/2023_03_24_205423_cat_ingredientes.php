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
        Schema::create('cat_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nome')->nullable();
            $table->string('Obs')->nullable();
         //   $table->foreignId('cidade_id')->constrained('cidade')->onDelete('cascade');
          //  $table->foreign('cidade_id')->references('id')->on('cidade')->onDelete('cascade');


             
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
        Schema::dropIfExists('cat_ingredientes');

    }
};