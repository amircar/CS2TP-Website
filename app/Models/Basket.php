<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'baskets';
    
    public function stocks(){
        return $this->belongsToMany(Stock::class, 'basket_stock')->withPivot('quantity');
    }
}
