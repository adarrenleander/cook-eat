<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function foodType() {
        return $this->belongsTo('App\FoodType');
    }

    public function cuisine() {
        return $this->belongsTo('App\Cuisine');
    }

    public function recipes() {
        return $this->hasMany('App\Recipe');
    }
}
