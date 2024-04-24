<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID')->nullable(false); 
            $table->string('nombre');
            $table->string('email');
            $table->text('mensaje');
            $table->timestamps();

            $table->foreign('UserID')->references('UserID')->on('Users');
        });
    }


    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
};
