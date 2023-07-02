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
        if (!Schema::hasTable('speakings')) {
            Schema::create('speakings', function (Blueprint $table) {
                $table->id();
                $table->string('student_id')->nullable();
                $table->string('student_name')->nullable();
                $table->string('file');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speakings');
    }
};
