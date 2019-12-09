<?php

use App\FoodType;
use Illuminate\Database\Seeder;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodType::create([
            'name' => 'Stir-fried',
            'image' => '/images/food-type/stirfried.jpg'
        ]);

        FoodType::create([
            'name' => 'Baked',
            'image' => '/images/food-type/baked.jpg'
        ]);

        FoodType::create([
            'name' => 'Steamed',
            'image' => '/images/food-type/steamed.jpg'
        ]);

        FoodType::create([
            'name' => 'Grilled',
            'image' => '/images/food-type/grilled.jpg'
        ]);

        FoodType::create([
            'name' => 'Deep-fried',
            'image' => '/images/food-type/deepfried.jpg'
        ]);

        FoodType::create([
            'name' => 'Soup',
            'image' => '/images/food-type/soup.jpg'
        ]);

        FoodType::create([
            'name' => 'Dessert',
            'image' => '/images/food-type/dessert.jpg'
        ]);
    }
}
