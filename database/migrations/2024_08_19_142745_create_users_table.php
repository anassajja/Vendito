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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default(''); 
            $table->string('last_name')->default('');
            $table->string('username')->default('');
            $table->string('email')->default('');
            $table->string('lieu_residence')->default('');
            $table->integer('numero_telephone');
            $table->string('password')->default('');
            $table->string('password_confirmation')->default('');
            $table->date('date_naissance');
            $table->string('sexe')->default('');
            $table->dateTime('date_inscription');
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
