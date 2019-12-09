<?php

namespace App\Http\Controllers;

use App\Food;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function showCheckout($id) {
        $data = [
            'recipes' => Recipe::where('food_id', '=', $id)->get()
        ];

        return view('checkout')->with($data);
    }
}
