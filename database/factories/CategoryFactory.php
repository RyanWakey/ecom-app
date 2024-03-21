<?php

namespace Database\Factories;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'parent_id' => null,  // Initially set to null, indicating a top-level category
        ];
    }
    /**
     * Define the state for a category with a parent.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    public function withParent()
    {
        return $this->state(function (array $attributes) {
            return [
                'parent_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id,
            ];
        });
    }
}
