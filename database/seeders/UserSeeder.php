<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\CartItem;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->name = "Ryan";
        $user1->email = "Ryan100@email.com";
        $user1->password = "Secret123";
        $user1->save();

        $user2 = new User;
        $user2->name = "Ben";
        $user2->email = "ben@email.com";
        $user2->password = "NotSecret123";
        $user2->save();

        // User::factory(10)->create();

        User::factory(10)->create()->each(function ($user) {
            // For each user, create 1 to 3 orders
            Order::factory(rand(1, 3))->create(['user_id' => $user->id]);
        
            // For each user, create 1 to 5 cart items
            CartItem::factory(rand(1, 5))->create([
                'user_id' => $user->id,
                'product_id' => Product::inRandomOrder()->first()->id  // Assign a random product to the cart item
            ]);
        });
    }
}
