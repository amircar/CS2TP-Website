<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function stocks(){
        return $this->belongsToMany(Stock::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Product::class, 'stocks');
    }
}
