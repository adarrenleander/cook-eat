<?php

namespace App\Http\Controllers;

use App\Cart;
use App\DetailTransaction;
use App\Food;
use App\HeaderTransaction;
use App\Recipe;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function showCheckout() {
        $data = [
            'carts' => Cart::all()
        ];

        return view('checkout')->with($data);
    }

    public function checkoutItems(Request $request) {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]+$/i|min:8|max:12',
            'address' => 'required|min:10|ends_with:Street'
        ];

        $validations = Validator::make($request->all(), $rules);

        if ($validations->fails()) {
            return back()->withInput()->withErrors($validations);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        $ht = new HeaderTransaction;
        $ht->user_id = $user->id;
        $ht->transaction_date = Carbon::now();
        $ht->save();

        $carts = Cart::all();
        foreach ($carts as $cart) {
            $dt = new DetailTransaction;
            $dt->header_transaction_id = $ht->id;
            $dt->ingredient_id = $cart->ingredient_id;
            $dt->quantity = $cart->quantity;
            $dt->save();
        }

        Cart::truncate();

        return redirect('/receipt');
    }

    public function showReceipt() {
        $data = [
            'receipt' => HeaderTransaction::latest()->first()
        ];

        return view('receipt')->with($data);
    }
}
