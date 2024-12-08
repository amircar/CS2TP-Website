<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    protected $table = 'product_images'; //Directs to correct table
    public function product()//Declares every image only has 1 product
    {
        return $this->belongsTo(Product::class);
    }
}
