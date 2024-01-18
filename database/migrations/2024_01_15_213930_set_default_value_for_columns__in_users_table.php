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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->default('')->change();
            $table->string('last_name')->default('')->change();
            $table->string('username')->default('')->change();
            $table->string('email')->default('')->change();
            $table->string('lieu_residence')->default('')->change();
            $table->int('numero_telephone')->default('')->change();
            $table->string('password')->default('')->change();
            $table->string('password_confirmation')->default('')->change();
            $table->date('date_naissance')->default('')->change();
            $table->string('sexe')->default('')->change();
            $table->dateTime('date_inscription')->default('')->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
