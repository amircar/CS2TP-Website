<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';
    public function baskets(){
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function size(){
        return $this->belongsTo(Size::class);
    }
}
