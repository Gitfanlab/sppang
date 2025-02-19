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
        Schema::create('M_AFFECTATIONS', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CD_EMPLOYEE')->constrained('R_EMPLOYEES')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('CD_JOB')->constrained('R_JOBS')->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['CD_EMPLOYEE', 'CD_JOB']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('M_AFFECTATIONS');
    }
};
