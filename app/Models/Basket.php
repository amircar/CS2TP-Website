<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function stock(){
        return $this->belongsToMany(Stock::class)->withPivot('quantity');
    }
}
