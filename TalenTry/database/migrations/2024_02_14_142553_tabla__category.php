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
        Schema::create('Category', function(Blueprint $table){
            $table->id('CategoryID', 4);
            $table->string('CategoryName', 50)->notnull();
            $table->string('description', 200)->default('null');
            $table->string('image', 255)->default('https://deproconsultores.com/wp-content/uploads/2018/11/Art-245-Trabajo-en-casa-1.jpg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Category');
    }
};
