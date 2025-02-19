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
        Schema::create('R_ACTIVITIES', function (Blueprint $table) {
            $table->id();
            $table->string('LB_ACTIVITY')->unique();
            $table->foreignId('CD_ACTIVITY_TYPE')->constrained('R_ACTIVITY_TYPES')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_ACTIVITIES');
    }
};
