<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'user_id',
        'review',
        'rating',
    ];

    /**
     * Get the product that the review belongs to.
     */
    public function product()//Declares relationship with product
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the user who wrote the review.
     */
    public function user()//Declares relationship with user
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}