<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all users or a subset of users
        $users = User::all();

        // Iterate over each user to create orders
        foreach ($users as $user) {
            // Create 1 to 3 orders for each user
            Order::factory(rand(1, 3))->create([
                'user_id' => $user->id, 
            ]);
        }
    }
}
