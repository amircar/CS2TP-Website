<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function basket(){
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
