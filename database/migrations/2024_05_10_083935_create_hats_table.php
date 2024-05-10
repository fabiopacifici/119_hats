<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hats', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 10);
            $table->string('name', 50);
            $table->string('brand', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('size', 20)->default('Taglia unica');
            $table->decimal('price', 5, 2)->unsigned()->nullable();
            $table->string('color', 20)->nullable();
            $table->boolean('is_available')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hats');
    }
};
