<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recipes() {
        return $this->hasMany('App\Recipe');
    }

    public function carts() {
        return $this->hasMany('App\Cart');
    }
}
