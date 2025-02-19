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
        Schema::create('R_EMPLOYEES', function (Blueprint $table) {
            $table->id();
            $table->string('CD_EMPLOYEE')->unique();
            $table->string('LB_FIRSTNAME');
            $table->string('LB_LASTNAME');
            $table->string('LN_EMAIL');
            $table->foreignId('CD_GENDER')->constrained('R_GENDERS')->onDelete('cascade');
            $table->foreignId('CD_RANK')->constrained('R_RANKS')->onDelete('cascade');
            $table->foreignId('CD_DOMAIN')->constrained('R_DOMAINS')->onDelete('cascade');
            $table->date('DT_JOIN');
            $table->date('DT_QUIT');
            $table->string('LB_ACTUAL_UNIT');
            $table->date('DT_START');
            $table->date('DT_END')->nullable();
            $table->string('LB_FUTURE_UNIT');
            $table->string('LB_COMMENT')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('R_EMPLOYEES');
    }
};
