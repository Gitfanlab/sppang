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
        Schema::create('M_JOB_QUALIFICATIONS', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CD_JOB')->constrained('R_JOBS')->onDelete('cascade');
            $table->foreignId('CD_QUALIFICATION')->constrained('R_QUALIFICATIONS')->onDelete('cascade');
            $table->unique(['CD_JOB', 'CD_QUALIFICATION']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('M_JOB_QUALIFICATIONS');
    }
};
