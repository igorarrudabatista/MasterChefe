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
    public function up() {

    Schema::create('produtos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('Nome')->nullable();
        $table->string('Obs')->nullable();
        $table->string('image')->nullable();
        $table->foreignId('cat_ingredientes_id')->constrained('cat_ingredientes')->onDelete('cascade');
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
    Schema::dropIfExists('produtos');

}
};
