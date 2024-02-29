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
        Schema::create('Answer', function (Blueprint $table) {
            $table->id('AnswerID'); // This will automatically create an auto-incrementing primary key
            $table->string('answer', 100)->notnull();
            $table->unsignedBigInteger('QuestionID')->notnull();
            $table->integer('QuestionPoints')->notnull();
    
            $table->foreign('QuestionID')->references('QuestionID')->on('Question'); // Adjust the table name if needed
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
