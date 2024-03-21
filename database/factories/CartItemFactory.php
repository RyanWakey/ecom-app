<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CartItem;
use App\Models\User;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 10), // Random quantity between 1 and 10
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'product_id' => Product::inRandomOrder()->first()->id ?? Product::factory()->create()->id,
        ];
    }
}
