<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodTypeSeeder::class);
        $this->call(CuisineSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(RecipeSeeder::class);
    }
}
