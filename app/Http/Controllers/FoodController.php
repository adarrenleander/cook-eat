<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function showRecipesType() {
        $data = [
            'foods' => Food::all()
        ];

        return view('recipes_type')->with($data);
    }

    public function showRecipeDetails($id) {
        $data = [
            'food' => Food::where('id', '=', $id)->first()
        ];

        return view('recipe_details')->with($data);
    }
}
