<?php

use App\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Ingredient::create([
            'name' => 'Garclic Cloves',
            'unit' => '1 kg',
            'price' => 31350
        ]);

        // 2
        Ingredient::create([
            'name' => 'Mayonnaise',
            'unit' => '1 kg',
            'price' => 25000
        ]);

        // 3
        Ingredient::create([
            'name' => 'Anchovy Fillets',
            'unit' => '1 can',
            'price' => 60000
        ]);

        // 4
        Ingredient::create([
            'name' => 'Parmesan Cheese',
            'unit' => '100 g',
            'price' => 30000
        ]);

        // 5
        Ingredient::create([
            'name' => 'Worcestershire Sauce',
            'unit' => '295 ml',
            'price' => 37000
        ]);

        // 6
        Ingredient::create([
            'name' => 'Dijon Mustard',
            'unit' => '245 g',
            'price' => 19500
        ]);
        
        // 7
        Ingredient::create([
            'name' => 'Lemons',
            'unit' => '1 kg',
            'price' => 33000
        ]);
        
        // 8
        Ingredient::create([
            'name' => 'Salt',
            'unit' => '250 g',
            'price' => 2000
        ]);

        // 9
        Ingredient::create([
            'name' => 'Black Pepper',
            'unit' => '83 g',
            'price' => 25000
        ]);

        // 10
        Ingredient::create([
            'name' => 'Olive Oil',
            'unit' => '250 ml',
            'price' => 45000
        ]);

        // 11
        Ingredient::create([
            'name' => 'White Bread',
            'unit' => '1 loaf',
            'price' => 13000
        ]);

        // 12
        Ingredient::create([
            'name' => 'Romain Lettuce',
            'unit' => '500 g',
            'price' => 17000
        ]);

        // 13
        Ingredient::create([
            'name' => 'Ground Beef',
            'unit' => '100 g',
            'price' => 12500
        ]);

        // 14
        Ingredient::create([
            'name' => 'Lasagna Noodles',
            'unit' => '230 g',
            'price' => 20500
        ]);

        // 15
        Ingredient::create([
            'name' => 'Spaghetti Sauce',
            'unit' => '315 g',
            'price' => 14500
        ]);

        // 16
        Ingredient::create([
            'name' => 'Italian Seasoning',
            'unit' => '18 g',
            'price' => 15000
        ]);

        // 17
        Ingredient::create([
            'name' => 'Ricotta',
            'unit' => '250 g',
            'price' => 59900
        ]);

        // 18
        Ingredient::create([
            'name' => 'Mozzarella',
            'unit' => '250 g',
            'price' => 28000
        ]);

        // 19
        Ingredient::create([
            'name' => 'Soy Sauce',
            'unit' => '1600 ml',
            'price' => 130000
        ]);

        // 20
        Ingredient::create([
            'name' => 'Sirloin Steak',
            'unit' => '200 g',
            'price' => 24900
        ]);

        // 21
        Ingredient::create([
            'name' => 'Bell Peppers',
            'unit' => '1 kg',
            'price' => 18000
        ]);

        // 22
        Ingredient::create([
            'name' => 'Red Onion',
            'unit' => '1 kg',
            'price' => 25000
        ]);

        // 23
        Ingredient::create([
            'name' => 'Salmon Filets',
            'unit' => '215 kg',
            'price' => 90000
        ]);

        // 24
        Ingredient::create([
            'name' => 'Onion',
            'unit' => '1 kg',
            'price' => 14000
        ]);

        // 25
        Ingredient::create([
            'name' => 'Cayenne Pepper Powder',
            'unit' => '60 g',
            'price' => 21000
        ]);

        // 26
        Ingredient::create([
            'name' => 'Dried Thyme',
            'unit' => '27 g',
            'price' => 23000
        ]);
    }
}