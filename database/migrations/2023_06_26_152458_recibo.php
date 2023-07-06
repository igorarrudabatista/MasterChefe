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
            $table->boolean('alimentos_proibidos')->nullable();
            $table->decimal('nota_seduc1',10,2)->nullable();
            $table->decimal('nota_seduc2',10,2)->nullable();
            $table->decimal('nota_seduc3',10,2)->nullable();
            $table->decimal('nota_seduc4',10,2)->nullable();
            $table->decimal('nota_seduc5',10,2)->nullable();
            $table->decimal('nota_dre1',10,2)->nullable();
            $table->decimal('nota_dre2',10,2)->nullable();
            $table->decimal('nota_dre3',10,2)->nullable();
            $table->decimal('nota_dre4',10,2)->nullable();
            $table->decimal('nota_dre5',10,2)->nullable();
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
