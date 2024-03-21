<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\CartItem;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Creating cart items for existing users and products
         $users = User::all();
         $productIds = Product::pluck('id');
 
         if ($users->isEmpty() || $productIds->isEmpty()) {
             //  Should log a warning or throw exception here if no users or products.
             return;
         }
 
         $users->each(function ($user) use ($productIds) {
             // For each user, create a random number of cart items (between 1 and 5)
             CartItem::factory(rand(1, 5))->create([
                 'user_id' => $user->id,
                 // Assign a random product from the available products
                 'product_id' => $productIds->random(),
             ]);
         });
    }
}
