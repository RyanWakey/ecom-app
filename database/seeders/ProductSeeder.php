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
        $product3 = new Product;
        $product3->name = "Laptop Pro";
        $product3->description = "High-performance laptop suitable for professional use.";
        $product3->price = 1200.99;
        $product3->stock = 15;
        $product3->category_id = 1; // 1 is the ID for the 'Electronics' category
        $product3->save();
        
        $product4 = new Product;
        $product4->name = "Smartphone X";
        $product4->description = "Latest smartphone with high-end features.";
        $product4->price = 999.99;
        $product4->stock = 25;
        $product4->category_id = 1; 
        $product4->save();
        
        $product5 = new Product;
        $product5->name = "Bluetooth Headphones";
        $product5->description = "Wireless headphones with noise cancellation.";
        $product5->price = 250.50;
        $product5->stock = 40;
        $product5->category_id = 1; 
        $product5->save();
        
        $product6 = new Product;
        $product6->name = "Running Shoes";
        $product6->description = "Comfortable and durable running shoes for all ages.";
        $product6->price = 85.99;
        $product6->stock = 50;
        $product6->category_id = 2; // 2 is the ID for the 'Sportswear' category
        $product6->save();
        
        $product7 = new Product;
        $product7->name = "Yoga Mat";
        $product7->description = "Eco-friendly yoga mat for optimal grip.";
        $product7->price = 47.99;
        $product7->stock = 30;
        $product7->category_id = 2; 
        $product7->save();
        
        $product8 = new Product;
        $product8->name = "Tennis Racket";
        $product8->description = "Lightweight tennis racket for professional play.";
        $product8->price = 199.99;
        $product8->stock = 20;
        $product8->category_id = 2; 
        $product8->save();
        
        $product9 = new Product;
        $product9->name = "Classic Novel";
        $product9->description = "A must-read classic novel for literature enthusiasts.";
        $product9->price = 15.99;
        $product9->stock = 80;
        $product9->category_id = 3; // 3 is the ID for the 'Books' category
        $product9->save();
        
        $product10 = new Product;
        $product10->name = "Cooking Pan";
        $product10->description = "Non-stick cooking pan ideal for everyday use.";
        $product10->price = 35.99;
        $product10->stock = 60;
        $product10->category_id = 4; // 4 is the ID for the 'Kitchenware' category
        $product10->save();

        Product::factory(10)->create(['category_id' => rand(1, 4)]);
    }
}
