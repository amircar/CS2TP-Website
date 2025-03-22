<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = 'products'; //Directs to correct table

    public function product_images()//Declares all products have many images
    {
        return $this->hasMany(Product_Image::class);
    }

    public function sizes()//Declares many-many relationship with sizes through stocks
    {
        return $this->belongsToMany(Size::class, 'stocks');
    }

    public function baskets()//Declares many-many relationship with baskets through stock then basket_stock with column quantity
    {
        return $this->belongsToMany(Basket::class, 'basket_stock')->withPivot('quantity');
    }

    public function stocks() //Declares all products relate to many stocks
    { 
        return $this->hasMany(Stock::class); 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
