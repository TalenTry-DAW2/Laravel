<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('QA', function (Blueprint $table) {
            $table->integer('QAID')->primary();
            $table->integer('RecordID')->nullable(false);
            $table->integer('AnswerID')->nullable(false);
            $table->integer('QuestionID')->nullable(false);
            $table->date('StartDate')->nullable(false);
            $table->date('FinishDate')->nullable(false);

            // Foreign key constraints
            $table->foreign('RecordID')->references('RecordID')->on('Record');
            $table->foreign('AnswerID')->references('AnswerID')->on('Answer');
            $table->foreign('QuestionID')->references('QuestionID')->on('Question');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QA');
    }
};
