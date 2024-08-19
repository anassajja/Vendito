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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('category');
            $table->string('image_path')->nullable(); // Nullable if the image is optional
            $table->string('location');
            $table->string('brand');
            $table->string('condition');
            $table->string('delivery');
            $table->string('payment');
            $table->string('confirmation_status')->default('not_confirmed');
            $table->string('sale_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
