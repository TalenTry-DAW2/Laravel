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
        Schema::create('users', function (Blueprint $table) {
            $table->id('UserID', 16);
            $table->string('DNI', 9)->nullable(false);
            $table->string('name', 30)->nullable(false);
            $table->string('email', 50)->unique()->nullable(false);
            $table->string('photo')->nullable(true);
            $table->string('phone')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->enum('type', ['Usuario', 'Empresa', 'Administrador'])->default('Usuario')->nullable(false);
            $table->boolean('visibility')->default(false)->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
