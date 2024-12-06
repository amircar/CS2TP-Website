<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    public function stocks(){
        return $this->hasMany(Stock::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'stocks');
    }

    public function baskets(){
        return $this->belongsToMany(Basket::class,'basket_stock')->withPivot('quantity');
    }
}
