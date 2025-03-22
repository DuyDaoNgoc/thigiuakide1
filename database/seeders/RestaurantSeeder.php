<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RestaurantSeeder extends Seeder {
    public function run(): void
    {
        $faker = Faker::create();

        $categories = ['Cơm Dĩa', 'Bánh Mỳ', 'Bún Phở'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('T_restaurant')->insert([
                'name'        => $faker->word(),
                'description' => $faker->sentence(),
                'price'       => $faker->randomFloat(2, 10, 100),
                'category'    => $categories[array_rand($categories)],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}