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
        Schema::create('R_REM', function (Blueprint $table) {
            $table->id();
            $table->integer('CD_ETR')->unique();
            $table->string('LB_ETR');
            $table->foreignId('CD_MGS')->constrained('R_MGS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_REM');
    }
};
