<?php

//Muevete >:C
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
        Schema::create('Users', function(Blueprint $table){
            $table->string('DNI')->primary();
            $table->string('Name');
            $table->string('Password');
            $table->string('Email');
            $table->string('Type');
            $table->string('Phone');
        });

        //tamos \o.o/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
