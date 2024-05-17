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
        Schema::create('Share', function (Blueprint $table) {
            $table->id('ShareID');
            $table->unsignedBigInteger('UserID')->notnull();
            $table->unsignedBigInteger('CompanyID')->notnull();
            $table->date('ExpiredDate')->notnull();

            // Foreign key constraints
            $table->foreign('UserID')->references('UserID')->on('Users')->onDelete('cascade');
            $table->foreign('CompanyID')->references('CompanyID')->on('Company')->onDelete('cascade');
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
