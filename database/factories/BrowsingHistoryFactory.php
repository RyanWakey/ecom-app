<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BrowsingHistory;
use App\Models\Product;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BrowsingHistory>
 */
class BrowsingHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // User::Factory() - could create a user when creting browsing history
            'product_id' => Product::inRandomOrder()->first()->id,
            'viewed_at' => $this->faker->dateTimeBetween('-1 month', 'now')
        ];
    }
}
