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
        if (!Schema::hasTable('listening')) {
            Schema::create('listening', function (Blueprint $table) {
                $table->unsignedInteger('student_id')->primary();
                $table->string('student_name');
                $table->string('ans1');
                $table->string('ans2');
                $table->string('ans3');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening');
    }
};
