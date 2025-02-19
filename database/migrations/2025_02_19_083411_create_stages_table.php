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
        Schema::create('M_STAGES', function (Blueprint $table) {
            $table->id();
            $table->integer('NB_INDEX');
            $table->string('LB_STAGE');
            $table->foreignId('CD_CAREER_PATH')->constrained('M_CAREER_PATHS')->onDelete('cascade');
            $table->foreignId('CD_STAGE_TYPE')->constrained('R_STAGE_TYPES')->onDelete('cascade');
            $table->foreignId('CD_OU')->constrained('R_ORGANISATIONAL_UNITS')->onDelete('cascade');
            $table->integer('NB_DURATION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('M_STAGES');
    }
};
