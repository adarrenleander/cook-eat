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
            'ingredients' => '400 grams of ground beef</li><li>No-boil lasagna noodles</li><li>800 grams of bolognese sauce</li><li>Italian seasoning</li><li>200 grams of Ricotta</li><li>400 grams of shredded mozzarella',
            'steps' => 'Preheat oven to 190oC </li><li>Brown ground beef in a pan. Drain fat. Add bolognese sauce and Italian seasoning. Remove from heat </li><li>In a rectangular baking dish, spread a layer of sauce mixture on the bottom </li><li>Spread a thin layer of ricotta cheese over the lasagne noodles and make a layer in the baking dish, ricotta-side up </li><li>Spread a layer of sauce over the noodles. Sprinkle a layer of mozzarella cheese over the sauce </li><li>Repeat layers (ricotta-noodles, sauce, mozzarella) just like instruction number 4 and 5 </li><li>Cover with aluminum foil and bake (2nd from bottom) 35 to 45 minutes </li><li>Remove foil and bake another 15 to 20 minutes, until lightly browned </li><li>Let stand 10 minutes before serving to hold its shape',
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
            'ingredients' => '500 grams salmon filets</li><li>1 clove garlic, chopped fine</li><li>2 tablespoons onion, chopped fine</li><li>1 1/2 teaspoons pepper, freshly ground</li><li>3/4 teaspoon paprika</li><li>1/4 teaspoon cayenne</li><li>3/4 teaspoon dried thyme</li><li>1/4 teaspoon salt</li><li>1 1/2 tablespoons olive oil',
            'steps' => 'Combine all seasoning ingredients and spread over the surface of the salmon.</li><li>Bake (skin-side down) in a 350oF oven for 20-30 minutes depending on the thickness of the salmon.</li><li>If you are grilling it, do so over high heat for 10-15 minutes depend on the thickness. Do not turn the salmon over.',
            'duration' => 20,
            'food_type_id' => 2,
            'cuisine_id' => 2,
            'image' => '/images/food/spicy-baked-salmon.jpg'
        ]);

        Food::create([
            'name' => 'Tiramisu',
            'ingredients' => '6 egg yolks</li><li>3/4 cup white sugar</li><li>2/3 cup milk</li><li>1 1/4 cups heavy cream</li><li>1/2 teaspoon vanilla extract</li><li>1 pound mascarpone cheese</li><li>1/4 cup strong brewed coffee, room temperature</li><li>2 tablespoons rum</li><li>2 (3 ounce) packages ladyfinger cookies</li><li>1 tablespoon unsweetened cocoa powder',
            'steps' => 'In a medium saucepan, whisk together egg yolks and sugar until well blended. Whisk in milk and cook over medium heat, stirring constantly, until mixture boils. Boil gently for 1 minute, remove from heat and allow to cool slightly. Cover tightly and chill in refrigerator 1 hour.</li><li>In a medium bowl, beat cream with vanilla until stiff peaks form. Whisk mascarpone into yolk mixture until smooth.</li><li>In a small bowl, combine coffee and rum. Split ladyfingers in half lengthwise and drizzle with coffee mixture.</li><li>Arrange half of soaked ladyfingers in bottom of a 7x11 inch dish. Spread half of mascarpone mixture over ladyfingers, then half of whipped cream over that. Repeat layers and sprinkle with cocoa. Cover and refrigerate 4 to 6 hours, until set.',
            'duration' => 45,
            'food_type_id' => 7,
            'cuisine_id' => 1,
            'image' => '/images/food/tiramisu.jpg'
        ]);

        Food::create([
            'name' => 'Potato Gnocchi',
            'ingredients' => '1 pound refrigerated gnocchi</li><li>6 tablespoons unsalted butter</li><li>2 tablespoons chopped shallots</li><li>8 ounces Italian fontina cheese, cubed</li><li>1/3 cup heavy cream</li><li>3 tablespoons freshly grated Parmesan cheese</li><li>1 tablespoon chopped fresh basil',
            'steps' => 'Bring a large pot of lightly salted water to a boil. Add the gnocchi, and cook until tender, about 5 minutes. Drain, and set aside.</li><li>Once the gnocchi goes into the pot, start the sauce, as you want the gnocchi to be done first. Melt the butter in a saucepan over medium heat. Add the shallots, and cook for a few minutes, until tender. Stir in the cream, and heat to almost a boil. Gradually mix in the fontina and parmesan cheeses, being careful not to boil. Stir until smooth, then remove from the heat immediately, or the sauce may clump.</li><li>Place gnocchi into serving dishes, and spoon the sauce over them. Garnish with chopped fresh basil.',
            'duration' => 20,
            'food_type_id' => 2,
            'cuisine_id' => 1,
            'image' => '/images/food/potato-gnocchi.jpg'
        ]);

        Food::create([
            'name' => 'Spaghetti Aglio e Olio',
            'ingredients' => '1 pound uncooked spaghetti</li><li>6 cloves garlic, thinly sliced</li><li>1/2 cup olive oil</li><li>1/4 teaspoon red pepper flakes, or to taste</li><li>salt and freshly ground black pepper to taste</li><li>1/4 cup chopped fresh Italian parsley</li><li>1 cup finely grated Parmesan cheese',
            'steps' => 'Bring a large pot of lightly salted water to a boil. Cook spaghetti in the boiling water, stirring occasionally until cooked through but firm to the bite, about 12 minutes. Drain and transfer to a pasta bowl.</li><li>Combine garlic and olive oil in a cold skillet. Cook over medium heat to slowly toast garlic, about 10 minutes. Reduce heat to medium-low when olive oil begins to bubble. Cook and stir until garlic is golden brown, about another 5 minutes. Remove from heat.</li><li>Stir red pepper flakes, black pepper, and salt into the pasta. Pour in olive oil and garlic, and sprinkle on Italian parsley and half of the Parmesan cheese; stir until combined.</li><li>Serve pasta topped with the remaining Parmesan cheese.',
            'duration' => 30,
            'food_type_id' => 1,
            'cuisine_id' => 1,
            'image' => '/images/food/spaghetti-aglio-e-olio.jpg'
        ]);
    }
}
