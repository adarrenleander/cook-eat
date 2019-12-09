<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@showIndex');
Route::get('/search-ingredients', 'IngredientController@showSearchIngredients');
Route::get('/results-ingredients', 'IngredientController@showResultsIngredients');
Route::get('/recipes-type', 'FoodController@showRecipesType');
Route::get('/recipe-details/{id}', 'FoodController@showRecipeDetails');
Route::get('/premium-account', 'HomeController@showPremiumAccount');
Route::get('/checkout/{id}', 'RecipeController@showCheckout');