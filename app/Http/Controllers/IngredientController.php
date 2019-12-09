<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function showSearchIngredients() {
        return view('search_ingredients');
    }

    public function showResultsIngredients() {
        return view('results_ingredients');
    }
}
