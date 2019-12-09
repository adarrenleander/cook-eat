<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Food;
use App\FoodType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showIndex() {
        $data = [
            'featureds' => Food::all()->random(4),
            'foodTypes' => FoodType::all(),
            'cuisines' => Cuisine::all()
        ];

        return view('index')->with($data);
    }

    public function showPremiumAccount() {
        return view('premium_account');
    }
}
