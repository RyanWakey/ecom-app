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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); 
            $table->integer('quantity'); // Quantity of the product
            $table->unsignedBigInteger('user_id'); // Each cart item is tied to a user
            $table->unsignedBigInteger('product_id'); // The product in the cart
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Foreign key to the users table
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Foreign key to the products table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
