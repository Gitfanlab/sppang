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
        Schema::create('M_PROGRESSES', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CD_EMPLOYEE')->constrained('R_EMPLOYEES')->onDelete('cascade');
            $table->foreignId('CD_STAGE')->constrained('M_STAGES')->onDelete('cascade');
            $table->foreignId('CD_PROGRESS_STATUS')->constrained('R_PROGRESS_STATUSES')->onDelete('cascade');
            $table->date('DT_START');
            $table->date('DT_COMPLETION');
            $table->integer('NB_COMPLETION_PERCENTAGE');
            $table->unique(['CD_EMPLOYEE', 'CD_STAGE']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('M_PROGRESSES');
    }
};
