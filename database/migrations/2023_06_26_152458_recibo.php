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
        Schema::create('recibo', function (Blueprint $table) {

        $table->increments('id');

            $table->foreignId('dre_id')->constrained('dre')->onDelete('cascade');
            $table->foreignId('escola_id')->constrained('escola')->onDelete('cascade');
            $table->string('Nome')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Nome_Prato')->nullable();
            $table->string('Outros_ingredientes')->nullable();
            $table->string('Preparo')->nullable();
            $table->string('image')->nullable();
            $table->decimal('Nota1',10,4)->nullable();
            $table->decimal('Nota2',10,4)->nullable();
            $table->decimal('Nota3',10,4)->nullable();
            $table->decimal('Nota4',10,4)->nullable();
            $table->decimal('Nota5',10,4)->nullable();
            $table->decimal('Nota6',10,4)->nullable();
            $table->boolean('checkbox')->nullable();
            $table->boolean('disp_site')->nullable();
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
        Schema::dropIfExists('recibo');

    }
};
