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
        // Caesar Salad
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
        
        // Beef Lasagna
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

        // Grilled Steak Kebab
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

        // Tiramisu
        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 27,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 28,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 29,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 30,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 31,
            'quantity' => 3
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 32,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 33,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 34,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 35,
            'quantity' => 2
        ]);

        Recipe::create([
            'food_id' => 5,
            'ingredient_id' => 36,
            'quantity' => 1
        ]);

        // Potato Gnocchi
        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 37,
            'quantity' => 2
        ]);

        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 38,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 39,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 40,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 30,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 4,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 6,
            'ingredient_id' => 41,
            'quantity' => 1
        ]);

        // Spaghetti Aglio e Olio
        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 42,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 1,
            'quantity' => 6
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 10,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 43,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 8,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 9,
            'quantity' => 1
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 44,
            'quantity' => 2
        ]);

        Recipe::create([
            'food_id' => 7,
            'ingredient_id' => 4,
            'quantity' => 1
        ]);
    }
}
