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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            //  $table->foreign('recibo_id')->references('id')->on('recibo');
            //    $table->foreignId('recibo_id')->constrained('recibo')->onDelete('cascade');
            //  $table->foreign('recibo_id')->references('id')->on('recibo')->onDelete('cascade');
            
         // $table->unsignedBigInteger('recibo_id');
          $table->unsignedInteger('recibo_id');
          $table->foreign('recibo_id')->references('id')->on('recibo')->onDelete('cascade');
          $table->string('sessao')->nullable();


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
        Schema::dropIfExists('likes');
    }
};
