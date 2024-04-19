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
        $products = [
            [
                'name' => "Laptop Pro",
                'description' => "High-performance laptop suitable for professional use.",
                'price' => 1200.99,
                'stock' => 15,
                'imageUrl' => '/images/Laptop.jpg',
                'category_id' => 1
            ],
            [
                'name' => "Iphone X ",
                'description' => "Latest smartphone with high-end features.",
                'price' => 999.99,
                'stock' => 25,
                'imageUrl' => '/images/Iphone X.png',
                'category_id' => 1
            ],
            [
                'name' => "Bluetooth Headphones",
                'description' => "Wireless headphones with noise cancellation.",
                'price' => 250.50,
                'stock' => 40,
                'imageUrl' => '/images/Bluetooth headphones.jpg',
                'category_id' => 1
            ],
            [
                'name' => "Running Shoes",
                'description' => "Comfortable and durable running shoes for all ages.",
                'price' => 85.99,
                'stock' => 50,
                'imageUrl' => '/images/Running shoes.jpg',
                'category_id' => 2
            ],
            [
                'name' => "Yoga Mat",
                'description' => "Eco-friendly yoga mat for optimal grip.",
                'price' => 47.99,
                'stock' => 30,
                'imageUrl' => '/images/Yoga mat.jpg',
                'category_id' => 2
            ],
            [
                'name' => "Tennis Racket",
                'description' => "Lightweight tennis racket for professional play.",
                'price' => 199.99,
                'stock' => 20,
                'imageUrl' => '/images/Tennis racket.jpg',
                'category_id' => 2
            ],
            [
                'name' => "Harry Potter Collection",
                'description' => "A must-read classic collection of the Harry Potter series.",
                'price' => 15.99,
                'stock' => 80,
                'imageUrl' => '/images/Yoga mat.jpg',
                'category_id' => 3
            ],
            [
                'name' => "Cooking Pan",
                'description' => "Non-stick cooking pan ideal for everyday use.",
                'price' => 35.99,
                'stock' => 60,
                'imageUrl' => '/images/Cooking pot.jpg',
                'category_id' => 4
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        Product::factory(10)->create(['category_id' => rand(1, 4)]);
    }
}
