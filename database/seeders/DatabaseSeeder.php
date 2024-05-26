<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Deal;
use App\Models\BrowsingHistory;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategorySeeder::class);        
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(CartItemSeeder::class);
        $this->call(BrowsingHistorySeeder::class);
        $this->call(DealSeeder::class);
     

         // Create users with associated deals and browsing histories
         User::factory()
         ->has(
             Deal::factory()
                 ->count(5)
                 ->state(function (array $attributes, User $user) {
                     return ['user_id' => $user->id, 'product_id' => Product::inRandomOrder()->first()->id];
                 })
         )
         ->has(
             BrowsingHistory::factory()
                 ->count(5)
                 ->state(function (array $attributes, User $user) {
                     return ['user_id' => $user->id, 'product_id' => Product::inRandomOrder()->first()->id];
                 })
         )
         ->count(10)
         ->create();

        // Create additional global deals
        Deal::factory()
            ->count(5)
            ->state(function (array $attributes) {
                return ['product_id' => Product::inRandomOrder()->first()->id];
            })
            ->create();
        }
}
