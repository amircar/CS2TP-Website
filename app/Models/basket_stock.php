<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class basket_stock extends Model
{
    protected $table = 'basket_stock';
    public $timestamps = false;

    protected $fillable = [
        'basket_id',
        'stock_id',
        'quantity',
    ];
}
