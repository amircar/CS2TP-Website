<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'baskets'; //Directs to correct table
    
    public function stocks()//Declares relationship to stocks as many-many. Allows retrieval of quantity column from basket_stock
    {
        return $this->belongsToMany(Stock::class, 'basket_stock')->withPivot('quantity');
    }
}
