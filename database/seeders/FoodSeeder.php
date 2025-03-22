<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;
use App\Models\Category;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();
        
        foreach ($categories as $category) {
            Food::factory(10)->create(['category_id' => $category->id]);
        }
    }
}

