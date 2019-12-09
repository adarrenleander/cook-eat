<?php

use App\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CAESAR SALAD
        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 1,
            'quantity' => 6
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 2,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 3,
            'quantity' => 5
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 4,
            'quantity' => 6
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 5,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 6,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 7,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 8,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 9,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 10,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 11,
            'quantity' => 4
        ]);

        Recipe::create([
            'food_id' => 1,
            'ingredient_id' => 12,
            'quantity' => 1
        ]);
        
        // BEEF LASAGNA
        Recipe::create([
            'food_id' => 2,
            'ingredient_id' => 13,
            'quantity' => 4
        ]);

        Recipe::create([
            'food_id' => 2,
            'ingredient_id' => 14,
            'quantity' => 1
        ]);
        
        Recipe::create([
            'food_id' => 2,
            'ingredient_id' => 15,
            'quantity' => 4
        ]);

        Recipe::create([
            'food_id' => 2,
            'ingredient_id' => 16,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 2,
            'ingredient_id' => 17,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 2,
            'ingredient_id' => 18,
            'quantity' => 2
        ]);

        // GRILLED STEAK KEBAB
        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 10,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 19,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 1,
            'quantity' => 3
        ]);

        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 9,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 20,
            'quantity' => 10
        ]);

        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 21,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 3,
            'ingredient_id' => 22,
            'quantity' => 1
        ]);

        // Spicy Baked Salmon
        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 23,
            'quantity' => 2
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 1,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 24,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 9,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 21,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 25,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 26,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 8,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 4,
            'ingredient_id' => 10,
            'quantity' => 1
        ]);
    }
}
