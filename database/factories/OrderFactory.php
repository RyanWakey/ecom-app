<?php

namespace Database\Factories;
use App\Models\Order;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['pending', 'completed', 'shipped', 'cancelled']), 
            'total' => $this->faker->randomFloat(2, 10, 10000), 
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
        ];
    }
}
