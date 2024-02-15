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
        Schema::create('User', function(Blueprint $table){
            $table->id();
            $table->string('DNI', 9)->nullable(false);
            $table->string('name', 30)->nullable(false);
            $table->string('password', 30)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('type', 50)->nullable(false);
            $table->integer('phone')->nullable(false);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};
