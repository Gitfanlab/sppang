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
        Schema::create('R_ORGANISATIONAL_UNITS', function (Blueprint $table) {
            $table->id();
            $table->string('CD_OU')->unique();
            $table->string('LB_OU');
            $table->foreignId('CD_NEXT_OU')->constrained('R_ORGANISATIONAL_UNITS');
            $table->foreignId('CD_OU_TYPE')->constrained('R_OU_TYPES');
            $table->foreignId('CD_OU_ENV')->constrained('R_OU_ENVIRONMENTS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_ORGANISATIONAL_UNITS');
    }
};
