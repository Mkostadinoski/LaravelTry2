<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('recipes', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image')->nullable(); // линк или path до слика
        $table->text('ingredients');
        $table->text('instructions');
        $table->string('cooking_time')->nullable(); // време за готвење
        $table->string('author')->nullable();
        $table->timestamps(); // created_at и updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
