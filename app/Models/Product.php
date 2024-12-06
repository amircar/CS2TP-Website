<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function product_images(){
        return $this->hasMany(Product_Image::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'stocks');
    }

    public function baskets()
    {
        return $this->belongsToMany(Basket::class, 'basket_stock')->withPivot('quantity');
    }

    public function stocks() 
    { 
        return $this->hasMany(Stock::class); 
    }
}
