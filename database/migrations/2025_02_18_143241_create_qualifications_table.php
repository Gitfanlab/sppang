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
        Schema::create('R_QUALIFICATIONS', function (Blueprint $table) {
            $table->id();
            $table->string('CD_QUALIFICATION')->unique();
            $table->string('LB_QUALIFICATION');
            $table->foreignId('CD_QUALIF_TYPE')->constrained('R_QUALIF_TYPES')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_QUALIFICATIONS');
    }
};
