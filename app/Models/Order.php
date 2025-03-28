<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['order_date', 
    'user_id', 
    'status'
];

    public function items()//Declares relationship with Order_Item
    {   
        return $this->hasMany(Order_Item::class, 'order_id');
    }

    public function user(){//Declares relationship with user
        return $this->belongsTo(User::class, 'user_id');
    }

}
