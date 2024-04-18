<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $accessKey = config('services.unsplash.key'); // Ensure you have 'UNSPLASH_ACCESS_KEY' in your .env
        $response = Http::get("https://api.unsplash.com/photos/random", [
            'query' => [
                'client_id' => $accessKey,
                'count' => 10 // Fetch 10 random images
            ]
        ]);

        $images = $response->json();

        $products = [
            [
                'name' => "Laptop Pro",
                'description' => "High-performance laptop suitable for professional use.",
                'price' => 1200.99,
                'stock' => 15,
                'category_id' => 1
            ],
            [
                'name' => "Smartphone X",
                'description' => "Latest smartphone with high-end features.",
                'price' => 999.99,
                'stock' => 25,
                'category_id' => 1
            ],
            [
                'name' => "Bluetooth Headphones",
                'description' => "Wireless headphones with noise cancellation.",
                'price' => 250.50,
                'stock' => 40,
                'category_id' => 1
            ],
            [
                'name' => "Running Shoes",
                'description' => "Comfortable and durable running shoes for all ages.",
                'price' => 85.99,
                'stock' => 50,
                'category_id' => 2
            ],
            [
                'name' => "Yoga Mat",
                'description' => "Eco-friendly yoga mat for optimal grip.",
                'price' => 47.99,
                'stock' => 30,
                'category_id' => 2
            ],
            [
                'name' => "Tennis Racket",
                'description' => "Lightweight tennis racket for professional play.",
                'price' => 199.99,
                'stock' => 20,
                'category_id' => 2
            ],
            [
                'name' => "Classic Novel",
                'description' => "A must-read classic novel for literature enthusiasts.",
                'price' => 15.99,
                'stock' => 80,
                'category_id' => 3
            ],
            [
                'name' => "Cooking Pan",
                'description' => "Non-stick cooking pan ideal for everyday use.",
                'price' => 35.99,
                'stock' => 60,
                'category_id' => 4
            ]
        ];

        foreach ($products as $index => $product) {
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'imageUrl' => $images[$index % count($images)]['urls']['regular'],
                'category_id' => $product['category_id']     
            ]);
        }

        // Additional random products with factory
        Product::factory(10)->create(['category_id' => rand(1, 4)]);
    }
}
