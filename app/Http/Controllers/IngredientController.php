<?php

namespace App\Http\Controllers;

use App\Food;
use App\Ingredient;
use App\Recipe;
use App\Search;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function showSearchIngredients() {
        $data = [
            'searches' => Search::all()
        ];

        return view('search_ingredients')->with($data);
    }

    public function inputIngredient(Request $request) {
        if ($request->search != '') {
            $search = new Search;
            $search->name = $request->search;
            $search->save();
        }

        return redirect('/search-ingredients');
    }

    public function removeIngredient($id) {
        $ingredient = Search::find($id);
        $ingredient->delete();

        return redirect('/search-ingredients');
    }

    public function showResultsIngredients() {
        $searches = Search::all();

        if ($searches->isEmpty()) {
            $result = Food::all();
        }
        else {
            $result = Food::where('id', '=', 0)->get();
        
            foreach ($searches as $search) {
                $ingredients = Ingredient::where('name', 'like', '%'.$search->name.'%')->get();

                foreach ($ingredients as $ingredient) {
                    $recipes = $ingredient->recipes;

                    foreach ($recipes as $recipe) {
                        $foods = $recipe->food;

                        if (!$result->contains('name', $recipe->food->name)) {
                            $result = $result->push($foods);
                        }
                    }
                }
            }
        }

        $data = [
            'searches' => $searches,
            'foods' => $result
        ];

        Search::truncate();

        return view('results_ingredients')->with($data);
    }
}
