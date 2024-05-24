<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrowsingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure there are users and products to associate browsing history with
        if (User::count() == 0) {
            User::factory()->count(10)->create();
        }

        if (Product::count() == 0) {
            Product::factory()->count(10)->create();
        }

        // Create 5 browsing history records
        BrowsingHistory::factory()->count(5)->create();
    }
}
