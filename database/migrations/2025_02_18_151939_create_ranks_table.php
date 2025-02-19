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
        Schema::create('R_RANKS', function (Blueprint $table) {
            $table->id();
            $table->string('CD_RANK')->unique();
            $table->string('LB_RANK')->nullable();
            $table->foreignId('CD_RANK_CAT')->constrained('R_RANK_CAT')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_RANKS');
    }
};
