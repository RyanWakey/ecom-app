<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deal;
use App\Models\User;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        // Ensure there are products to associate deals with (this should never run)
        if (Product::count() == 0) {
            Product::factory()->count(10)->create();
        }

        // Create 5 global deals
        Deal::facotory()->count(5)->create();

        // Create 3 user-specific deals for each user
        $users = User::all();
        foreach ($users as $user) {
            Deal::factory()->count(3)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
