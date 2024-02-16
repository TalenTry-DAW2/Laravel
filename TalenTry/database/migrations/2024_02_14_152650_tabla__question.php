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
            $table->integer('QuestionID')->primary();
            $table->string('question')->nullable(false);
            $table->integer('CategoryID')->nullable(false);

            $table->foreign('CategoryID')->references('CategoryID')->on('Category');
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
