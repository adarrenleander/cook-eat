<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Food;
use App\Recipe;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showCart() {
        $data = [
            'carts' => Cart::all()
        ];

        return view('cart')->with($data);
    }

    public function insertCart($id) {
        $recipes = Recipe::where('food_id', '=', $id)->get();

        foreach ($recipes as $recipe) {
            $check = Cart::where('ingredient_id', '=', $recipe->ingredient_id)->first();

            if ($check == null) {
                $cart = new Cart;
                $cart->ingredient_id = $recipe->ingredient_id;
                $cart->quantity = $recipe->quantity;
                $cart->save();
            }
            else {
                Cart::where('ingredient_id', '=', $recipe->ingredient_id)->update(['quantity' => $check->quantity + $recipe->quantity]);
            }
        }

        return redirect('/cart');
    }

    public function removeCart($id) {
        Cart::where('ingredient_id', '=', $id)->delete();

        return redirect('/cart');
    }

    public function addQuantity($id) {
        $ingredient = Cart::where('ingredient_id', '=', $id)->first();

        Cart::where('ingredient_id', '=', $id)->update(['quantity' => $ingredient->quantity + 1]);

        return redirect('/cart');
    }

    public function reduceQuantity($id) {
        $ingredient = Cart::where('ingredient_id', '=', $id)->first();
        
        if ($ingredient->quantity - 1 == 0) {
            return redirect("/cart/remove/$id");
        }
        else {
            Cart::where('ingredient_id', '=', $id)->update(['quantity' => $ingredient->quantity - 1]);

            return redirect('/cart');
        }
    }
}
