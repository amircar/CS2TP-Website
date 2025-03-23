<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks'; //Directs to correct table
    protected $fillable = ['product_id', 'size_id', 'quantity'];
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

    public function order_Items()//Declares relationship with order item
    {
        return $this->hasMany(Order_Item::class, 'stock_id');
    }
}
