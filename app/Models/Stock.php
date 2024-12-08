<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks'; //Directs to correct table
    public function baskets()//Declares many-many relationship with basket with column quantity
    {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }

    public function product()//Declare many stocks relate to only one product
    {
        return $this->belongsTo(Product::class);
    }

    public function size()//Declares many stocks relate to only one size
    {
        return $this->belongsTo(Size::class);
    }
}
