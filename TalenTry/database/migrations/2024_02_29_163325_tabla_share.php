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
        Schema::create('QA', function (Blueprint $table) {
            $table->id('CompanyID', 8); // This will automatically create an auto-incrementing primary key
            $table->string('name', 100)->notnull();
            $table->string('NIF', 9)->nullable(false);
            $table->string('password', 30)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
