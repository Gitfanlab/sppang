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
        Schema::create('R_RANK_CAT', function (Blueprint $table) {
            $table->id();
            $table->string('CD_RANK_CAT')->unique();
            $table->string('LB_RANK_CAT')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_RANK_CAT');
    }
};
