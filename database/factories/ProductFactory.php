<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true), // Generate a two-word product name
            'description' => $this->faker->sentence(), // Generate a random sentence for the description
            'price' => $this->faker->randomFloat(2, 0, 1000), // Generate a random price between 0 and 1000
            'stock' => $this->faker->numberBetween(10, 100), // Generate a random stock number between 10 and 100
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id,
        ];
    }
}
