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
            $table->integer('AnswerID', 32)->primary();
            $table->string('answer', 100)->nullable(false);
            $table->integer('QuestionID', 32)->nullable(false);
            $table->integer('QuestionPoints', 4)->nullable(false);
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
