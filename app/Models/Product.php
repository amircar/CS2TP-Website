<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function product_images(){
        return $this->hasMany(Product_Image::class);
    }
}
