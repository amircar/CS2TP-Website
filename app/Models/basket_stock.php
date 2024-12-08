<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class basket_stock extends Model
{
    protected $table = 'basket_stock'; //Directs to correct table
    public $timestamps = false; //Declares no timestamps in basket_stock

    protected $fillable = [ //Allows new data entries within basket_stock
        'basket_id',
        'stock_id',
        'quantity',
    ];
}
