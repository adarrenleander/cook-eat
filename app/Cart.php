<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function ingredient() {
        return $this->belongsTo('App\Ingredient');
    }
}
