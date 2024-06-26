<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        // Different way of doing it (query builder approach with insertGetId)
        $gardenEssentialsId = DB::table('categories')->insertGetId([
            'name' => 'Garden-Essentials',
            'description' => 'Essential tools and products for garden care',
            'parent_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert the subcategories (query builder approach with insert)
        DB::table('categories')->insert([
            [
                'name' => 'Furniture',
                'description' => 'Garden furniture to enhance your outdoor space.',
                'parent_id' => $gardenEssentialsId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gardening',
                'description' => 'Tools and supplies for gardening.',
                'parent_id' => $gardenEssentialsId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'OutdoorCooking',
                'description' => 'Equipment for outdoor cooking and barbecues.',
                'parent_id' => $gardenEssentialsId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decor and Lighting',
                'description' => 'Decorative items and lighting for your garden.',
                'parent_id' => $gardenEssentialsId,
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
