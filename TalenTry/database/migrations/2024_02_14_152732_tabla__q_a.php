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
            $table->id('QAID', 32); // This will automatically create an auto-incrementing primary key
            $table->unsignedBigInteger('RecordID')->notnull();
            $table->unsignedBigInteger('QuestionID')->notnull();
            $table->string('answer', 100)->notnull();
            $table->dateTime('StartDate')->notnull();
            $table->dateTime('FinishDate')->notnull();
    
            // Foreign key constraints
            $table->foreign('RecordID')->references('RecordID')->on('Record');
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
