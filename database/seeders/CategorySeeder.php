<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // Approach using Eloquent ORM (use this)
        $category1 = new Category;
        $category1->name = "Electronics";
        $category1->description = "All electronic items";
        $category1->save(); 

        $category2 = new Category;
        $category2->name = "Sportswear";
        $category2->description = "Athletic clothing and accessories";
        $category2->save(); 

        $category3 = new Category;
        $category3->name = "Books";
        $category3->description = "Range of books from various genres";
        $category3->save(); 

        $category4 = new Category;
        $category4->name = "Kitchenware";
        $category4->description = "Kitchen appliances and utensils";
        $category4->save(); 

         // Create Garden-Essentials as the main category
         $gardenEssentialsId = DB::table('categories')->insertGetId([
            'name' => 'Garden-Essentials',
            'description' => 'Essential tools and products for garden care',
            'image_path' => null,
            'parent_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert subcategories under Garden-Essentials
        $furnitureId = DB::table('categories')->insertGetId([
            'name' => 'Furniture',
            'description' => 'Garden furniture to enhance your outdoor space.',
            'image_path' => 'images/GardenEssentialsFurniture.jpg',
            'parent_id' => $gardenEssentialsId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $gardeningId = DB::table('categories')->insertGetId([
            'name' => 'Gardening',
            'description' => 'Tools and supplies for gardening.',
            'image_path' => 'images/GardenEssentialsGardening.jpg',
            'parent_id' => $gardenEssentialsId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $outdoorCookingId = DB::table('categories')->insertGetId([
            'name' => 'OutdoorCooking',
            'description' => 'Equipment for outdoor cooking and barbecues.',
            'image_path' => 'images/GardenEssentialsCooking.jpg',
            'parent_id' => $gardenEssentialsId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $decorAndLightingId = DB::table('categories')->insertGetId([
            'name' => 'Decor and Lighting',
            'description' => 'Decorative items and lighting for your garden.',
            'image_path' => 'images/GardenEssentialsLighting.jpg',
            'parent_id' => $gardenEssentialsId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


         // Insert subcategories under Furniture
         DB::table('categories')->insert([
            [
                'name' => 'Garden Furniture Sets',
                'description' => 'Complete sets of garden furniture.',
                'parent_id' => $furnitureId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Outdoor Screens & Protection',
                'description' => 'Screens and protective items for outdoor spaces.',
                'parent_id' => $furnitureId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hammocks, Stands & Accessories',
                'description' => 'Hammocks, stands, and related accessories.',
                'parent_id' => $furnitureId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert subcategories under Gardening
        DB::table('categories')->insert([
            [
                'name' => 'Lawn & Garden Watering Equipment',
                'description' => 'All equipment for watering lawns and gardens.',
                'parent_id' => $gardeningId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pest Control',
                'description' => 'Products for controlling garden pests.',
                'parent_id' => $gardeningId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plant and Soil Monitoring',
                'description' => 'Equipment for monitoring plant and soil health.',
                'parent_id' => $gardeningId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

             // Insert subcategories under OutdoorCooking
             DB::table('categories')->insert([
                [
                    'name' => 'Barbecue & Smoker Accessories',
                    'description' => 'Accessories for barbecues and smokers.',
                    'parent_id' => $outdoorCookingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Barbecue & Smoker',
                    'description' => 'Various types of barbecues and smokers.',
                    'parent_id' => $outdoorCookingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Barbecue Huts',
                    'description' => 'Shelters and huts for barbecuing.',
                    'parent_id' => $outdoorCookingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

            // Insert subcategories under Decor and Lighting
            DB::table('categories')->insert([
                [
                    'name' => 'Decorative Fences',
                    'description' => 'Fences for decoration and privacy.',
                    'parent_id' => $decorAndLightingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Garden Sculptures and Statues',
                    'description' => 'Sculptures and statues for garden decor.',
                    'parent_id' => $decorAndLightingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Wind Chimes',
                    'description' => 'Decorative wind chimes for gardens.',
                    'parent_id' => $decorAndLightingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        
        /**
        *  When to Use Which Approach
        *    Eloquent ORM: Use when you want to leverage Laravel’s features like relationships, 
        *    model events, and mutators. Best for smaller sets of data or when you need the convenience and 
        *    readability of Eloquent’s syntax..
        *
        *    Query Builder (insertGetId and insert): Use when performance is critical, 
        *    especially for large datasets. Also useful when you need the ID of the inserted record 
        *    immediately or when inserting multiple records in one query.
        */    
    }
}
