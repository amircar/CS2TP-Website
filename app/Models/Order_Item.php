<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['order_id', 
    'stock_id', 
    'quantity'
];

    public function order()
        {   
            return $this->belongsTo(Order::class);
        }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
