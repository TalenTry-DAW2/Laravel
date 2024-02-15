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
        Schema::create('QA', function(Blueprint $table){
            $table->integer('QAID', 9)->primary();
            $table->integer('RecordID', 16)->nullable(false);
            $table->integer('AwnserID', 32)->nullable(false);
            $table->integer('QuestionID', 32)->nullable(false);
            $table->timestamp('StartDate')->nullable(false);
            $table->timestamp('FinishDate')->nullable(false);
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
