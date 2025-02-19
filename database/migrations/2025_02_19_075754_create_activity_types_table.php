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
        Schema::create('R_ACTIVITY_TYPES', function (Blueprint $table) {
            $table->id();
            $table->string('CD_ACTIVITY_TYPE')->unique();
            $table->foreignId('CD_ETR')->constrained('R_REM')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_ACTIVITY_TYPES');
    }
};
