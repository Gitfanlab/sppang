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
        Schema::create('M_EMPLOYEE_SKILLS', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CD_EMPLOYEE')->constrained('R_EMPLOYEES')->onDelete('cascade');
            $table->foreignId('CD_SKILL')->constrained('R_SKILLS')->onDelete('cascade');
            $table->string('LB_COMMENT')->nullable();
            $table->unique(['CD_EMPLOYEE', 'CD_SKILL']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('M_EMPLOYEE_SKILLS');
    }
};
