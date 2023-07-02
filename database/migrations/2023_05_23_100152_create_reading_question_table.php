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
        if (!Schema::hasTable('reading_question')) {
            Schema::create('reading_question', function (Blueprint $table) {
                $table->id();
                $table->string('ques');
                $table->string('opt1');
                $table->string('opt2');
                $table->string('opt3');
                $table->string('opt4');
                $table->string('cans');
                $table->timestamps();
                $table->unsignedInteger('pass_id');
                $table->foreign('pass_id')->references('passage_id')->on('reading_topic');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading_question');
    }
};
