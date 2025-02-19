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
        Schema::create('R_OU_TYPES', function (Blueprint $table) {
            $table->id();
            $table->string('CD_OU_TYPE')->unique();
            $table->string('LB_OU_TYPE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_OU_TYPES');
    }
};
