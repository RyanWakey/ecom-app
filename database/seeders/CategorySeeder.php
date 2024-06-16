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

        $category5 = new Category;
        $category5->name = "Gardening-Supplies";
        $cateogry5->description = "Essential tools and products for garden care";
        $category5->save();
    }
}
