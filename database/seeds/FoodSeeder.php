<?php

use App\Food;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'name' => 'Caesar Salad',
            'ingredients' => '6 peeled and divided cloves of garlic</li><li>3/4 cup of mayonnaise</li><li>5 minced anchovy fillets</li><li>6 tablespoons of grated Parmesan cheese</li><li>1 teaspoon of Worcestershire sauce</li><li>1 teaspoon of Dijon mustard</li><li>1 tablespoon of lemon juice</li><li>salt</li><li>ground black pepper</li><li>1/4 cup of olive oil</li><li>4 cups of cubed day-old bread</li><li>1 head of romaine lettuce, torn into bite-size pieces',
            'steps' => 'Mince 3 cloves of garlic, and combine in a small bowl with mayonnaise, anchovies, 2 tablespoons of the Parmesan cheese, Worcestershire sauce, mustard, and lemon juice. Season to taste with salt and black pepper. Refrigerate until ready to use.</li><li>Heat oil in a large skillet over medium heat. Cut the remaining 3 cloves of garlic into quarters, and add to hot oil. Cook and stir until brown, and then remove garlic from pan. Add bread cubes to the hot oil. Cook, turning frequently, until lightly browned. Remove bread cubes from oil, and season with salt and pepper.</li><li>Place lettuce in a large bowl. Toss with dressing, remaining Parmesan cheese, and seasoned bread cubes.',
            'duration' => 35,
            'food_type_id' => 2,
            'cuisine_id' => 1,
            'image' => '/images/food/caesar-salad.jpg'
        ]);

        Food::create([
            'name' => 'Beef Lasagna',
            'ingredients' => '400 grams of ground beef</li><li>No-boil lasagna noodles</li><li>800 grams of spaghetti sauce</li><li>Italian seasoning</li><li>200 grams of Ricotta</li><li>400 grams of shredded mozzarella',
            'steps' => 'Preheat oven to 190oC </li><li>Brown ground beef in a pan. Drain fat. Add spaghetti sauce and Italian seasoning. Remove from heat </li><li>In a rectangular baking dish, spread a layer of sauce mixture on the bottom </li><li>Spread a thin layer of ricotta cheese over the lasagne noodles and make a layer in the baking dish, ricotta-side up </li><li>Spread a layer of sauce over the noodles. Sprinkle a layer of mozzarella cheese over the sauce </li><li>Repeat layers (ricotta-noodles, sauce, mozzarella) just like instruction number 4 and 5 </li><li>Cover with aluminum foil and bake (2nd from bottom) 35 to 45 minutes </li><li>Remove foil and bake another 15 to 20 minutes, until lightly browned </li><li>Let stand 10 minutes before serving to hold its shape',
            'duration' => 75,
            'food_type_id' => 2,
            'cuisine_id' => 1,
            'image' => '/images/food/beef-lasagna.jpg'
        ]);

        Food::create([
            'name' => 'Grilled Steak Kebabs',
            'ingredients' => '1/2 cup olive oil</li><li>1/2 cup soy sauce</li><li>3 cloves garlic, minced</li><li>1 teaspoon black pepper</li><li>2 pounds sirloin steak, cut in 1-inch cubes</li><li>1 red bell pepper, seeded and cut in 1-inch pieces</li><li>1 orange bell pepper, seeded and cut in 1-inch pieces</li><li>1 green bell pepper, seeded and cut in 1-inch pieces</li><li>1 red onion, cut in 1-inch pieces',
            'steps' => 'In a medium bowl, whisk together olive oil, soy sauce, garlic and pepper. Add the cubed sirloin steak to marinade and toss to coat. Cover with plastic wrap and let marinate for 30 minutes or up to 1 hour<./li><li>Once the meat has marinated, thread it onto the skewers alternating with pieces of bell pepper and red onion.</li><li>Grill kebabs over medium heat, turning often, until all sides of the meat is well brown and vegetables are tender (about 12 to 15 minutes).</li><li>Serve and enjoy.',
            'duration' => 75,
            'food_type_id' => 4,
            'cuisine_id' => 6,
            'image' => '/images/food/grilled-steak-kebabs.jpg'
        ]);

        Food::create([
            'name' => 'Spicy Baked Salmon',
            'ingredients' => '500 grams salmon filets</li><li>1 clove garlic, chopped fine</li><li>2 tablespoons onion, chopped fine</li><li>1.5 teaspoons pepper, freshly ground</li><li>3/4 teaspoon paprika</li><li>1/4 teaspoon cayenne</li><li>3/4 teaspoon dried thyme</li><li>1/4 teaspoon salt</li><li>1.5 tablespoons olive oil',
            'steps' => 'Combine all seasoning ingredients and spread over the surface of the salmon.</li><li>Bake (skin-side down) in a 350oF oven for 20-30 minutes depending on the thickness of the salmon.</li><li>If you are grilling it, do so over high heat for 10-15 minutes depend on the thickness. Do not turn the salmon over.',
            'duration' => 20,
            'food_type_id' => 2,
            'cuisine_id' => 2,
            'image' => '/images/food/spicy-baked-salmon.jpg'
        ]);

        // Food::create([
        //     'name' => '',
        //     'ingredients' => '',
        //     'steps' => '',
        //     'duration' => ,
        //     'food_type_id' => ,
        //     'cuisine_id' => ,
        //     'image' => '/images/food/'
        // ]);

        // Food::create([
        //     'name' => '',
        //     'ingredients' => '',
        //     'steps' => '',
        //     'duration' => ,
        //     'food_type_id' => ,
        //     'cuisine_id' => ,
        //     'image' => '/images/food/'
        // ]);
    }
}
