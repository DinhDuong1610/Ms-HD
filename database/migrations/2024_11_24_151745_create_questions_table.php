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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->text('a')->nullable();
            $table->text('b')->nullable();
            $table->text('c')->nullable();
            $table->text('d')->nullable();
            $table->foreignId('question_type_id')->constrained('question_types')->onDelete('cascade')->nullable();
            $table->foreignId('difficulty_level_id')->constrained('difficulty_levels')->onDelete('cascade')->nullable();
            $table->foreignId('grade_id')->constrained('grades')->onDelete('cascade')->nullable();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
