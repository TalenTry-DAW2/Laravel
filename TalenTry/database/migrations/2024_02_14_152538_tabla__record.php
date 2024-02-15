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
        Schema::create('Record', function (Blueprint $table) {
            $table->integer('RecordID')->primary();
            $table->string('DNI')->nullable(false);
            $table->double('score')->nullable(false);
            $table->timestamp('StartDate')->nullable(false);
            $table->timestamp('FinishDate')->nullable(false);
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
