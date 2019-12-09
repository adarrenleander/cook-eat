<?php

use App\Cuisine;
use Illuminate\Database\Seeder;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuisine::create([
            'name' => 'Italian',
            'image' => '/images/cuisine/italian.jpg'
        ]);

        Cuisine::create([
            'name' => 'Japanese',
            'image' => '/images/cuisine/japanese.jpg'
        ]);

        Cuisine::create([
            'name' => 'Chinese',
            'image' => '/images/cuisine/chinese.jpg'
        ]);

        Cuisine::create([
            'name' => 'Indonesian',
            'image' => '/images/cuisine/indonesian.jpg'
        ]);

        Cuisine::create([
            'name' => 'Western',
            'image' => '/images/cuisine/western.jpg'
        ]);

        Cuisine::create([
            'name' => 'Halal',
            'image' => '/images/cuisine/halal.jpg'
        ]);

        Cuisine::create([
            'name' => 'Korean',
            'image' => '/images/cuisine/korean.jpg'
        ]);
    }
}
