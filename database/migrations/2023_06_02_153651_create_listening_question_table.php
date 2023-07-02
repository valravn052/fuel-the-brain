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
        if (!Schema::hasTable('listening_question')) {
            Schema::create('listening_question', function (Blueprint $table) {
                $table->id();
                $table->string('ques');
                $table->string('cans');
                $table->unsignedBigInteger('aud_id');
                $table->foreign('aud_id')->references('id')->on('audio');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening_question');
    }
};
