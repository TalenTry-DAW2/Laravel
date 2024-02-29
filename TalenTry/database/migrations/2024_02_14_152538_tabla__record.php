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
        Schema::create('Record', function (Blueprint $table) {
            $table->id('RecordID', 24); // This will automatically create an auto-incrementing primary key
            $table->unsignedBigInteger('UserID')->nullable(false); // Adjusted data type to match Users table
            $table->double('score', 5, 2)->nullable(false);
            $table->date('StartDate')->nullable(false);
            $table->date('FinishDate')->nullable(false);
    
            $table->foreign('UserID')->references('UserID')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Record');
    }
};
