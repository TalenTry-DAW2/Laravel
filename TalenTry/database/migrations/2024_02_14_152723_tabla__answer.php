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
        Schema::create('Answer', function(Blueprint $table){
            $table->integer('AnswerID')->primary();
            $table->string('answer')->nullable(false);
            $table->integer('QuestionID')->nullable(false);
            $table->integer('QuestionPoints')->nullable(false);

            $table->foreign('QuestionID')->references('QuestionID')->on('Question');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Answer');
    }
};
