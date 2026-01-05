<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('recipes', function (Blueprint $table) {
    //         //
    //     });
    // }
    public function up()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->string('image')->nullable();
        $table->string('cooking_time')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
public function down()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->dropColumn('image');
        $table->dropColumn('cooking_time');
    });
}
};
