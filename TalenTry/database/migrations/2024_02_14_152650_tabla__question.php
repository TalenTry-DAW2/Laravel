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
        Schema::create('Question', function(Blueprint $table){
            $table->integerrr('QuestionID', 32)->primary();
            $table->string('question', 100)->nullable(false);
            $table->integer('CategoryID', 32)->nullable(false);
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
