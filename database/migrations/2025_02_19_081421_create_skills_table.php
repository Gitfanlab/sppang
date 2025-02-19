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
        Schema::create('R_SKILLS', function (Blueprint $table) {
            $table->id();
            $table->string('LB_SKILL')->unique();
            $table->foreignId('CD_ACTIVITY')->constrained('R_ACTIVITIES')->onDelete('cascade');
            $table->foreignId('CD_SKILL_TYPE')->constrained('R_SKILL_TYPES')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_SKILLS');
    }
};
