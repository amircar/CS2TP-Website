<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes'; //Directs to correct table
    public function stocks() //Declares every size relates to many stocks
    {
        return $this->hasMany(Stock::class);
    }

    public function products()//Declares many-many relationship with products through stocks
    {
        return $this->belongsToMany(Product::class, 'stocks');
    }

    public function baskets()//Declare to correct table
    {
        return $this->belongsToMany(Basket::class,'basket_stock')->withPivot('quantity');
    }
}
