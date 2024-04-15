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
        Schema::create('Company', function (Blueprint $table) {
            $table->id('CompanyID', 8); // This will automatically create an auto-incrementing primary key
            $table->string('name', 100)->notnull();
            $table->string('NIF', 32)->nullable(false);
            $table->string('address')->nullable(false);
            $table->unsignedBigInteger('UserID')->nullable(false);

            $table->foreign('UserID')->references('UserID')->on('Users');
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
