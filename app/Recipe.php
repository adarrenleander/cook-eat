<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function food() {
        return $this->belongsTo('App\Food');
    }

    public function ingredient() {
        return $this->belongsTo('App\Ingredient');
    }
}
