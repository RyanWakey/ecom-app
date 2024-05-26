<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deal;
use App\Models\User;
use App\Models\Product;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        // Ensure there are products to associate deals with
        if (Product::count() == 0) {
            Product::factory()->count(10)->create();
        }

        // Ensure there are users to associate user-specific deals with
        if (User::count() == 0) {
            User::factory()->count(10)->create();
        }

        // Create 5 global deals
        Deal::factory()->count(5)->create();

        // Create 5 user-specific deals for each user
        $users = User::all();
        foreach ($users as $user) {
            Deal::factory()->count(5)->create([
                'user_id' => $user->id
            ]);
        }
    }

}
