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
        Schema::create('R_JOBS', function (Blueprint $table) {
            $table->id();
            $table->string('CD_JOB')->unique();
            $table->string('LB_JOB');
            $table->foreignId('CD_DOMAIN')->constrained('R_DOMAINS')->onDelete('cascade');
            $table->foreignId('CD_RANK')->constrained('R_RANKS')->onDelete('cascade');
            $table->foreignId('CD_CAREER_PATH')->constrained('M_CAREER_PATHS')->onDelete('cascade');
            $table->foreignId('CD_ETR')->constrained('R_REM')->onDelete('cascade');
            $table->foreignId('CD_OU')->constrained('R_ORGANISATIONAL_UNITS')->onDelete('cascade');
            $table->date('DT_YEAR_NEED');
            $table->string('LB_COMMENT')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_JOBS');
    }
};
