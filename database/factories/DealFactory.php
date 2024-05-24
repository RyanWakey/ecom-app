<?php

namespace Database\Factories;

use App\Models\Deal;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'discount' => $this->faker->randomFloat(2, 3, 75), // Discount between 3% and 75%
            'valid_until' => $this->faker->dateTimeBetween('now', '+1 year'),
            'user_id' => User::factory()->nullable(), // Nullable for global deals
            'targeting_criteria' => json_encode([
                'browsing_history' => $this->faker->randomElements(['Electronics', 'Books', 'Sportswear'], 2),
                'location' => $this->faker->randomElement(['US', 'EU', 'ASIA'])
            ])
        ];
    }
}
