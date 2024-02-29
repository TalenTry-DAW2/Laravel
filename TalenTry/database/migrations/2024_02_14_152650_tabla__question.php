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
        Schema::create('Question', function (Blueprint $table) {
            $table->id('QuestionID'); // This will automatically create an auto-incrementing primary key
            $table->string('question', 100)->notnull();
            $table->unsignedBigInteger('CategoryID')->notnull();
    
            $table->foreign('CategoryID')->references('CategoryID')->on('category'); // Adjust the table name if needed
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Question');
    }
};
