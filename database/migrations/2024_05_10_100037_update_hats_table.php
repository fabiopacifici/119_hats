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
        Schema::table('hats', function (Blueprint $table) {
            $table->string('column_1');
            $table->string('column_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hats', function (Blueprint $table) {
            $table->dropColumn(['column_1', 'column_2']);
        });
    }
};
