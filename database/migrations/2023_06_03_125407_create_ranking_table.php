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
        if (!Schema::hasTable('ranking')) {
            Schema::create('ranking', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('student_id');
                $table->string('student_name');
                $table->integer('writing_marks')->nullable();
                $table->integer('reading_marks')->nullable();
                $table->integer('listening_marks')->nullable();
                $table->integer('speaking_marks')->nullable();
                $table->integer('total_marks');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranking');
    }
};
