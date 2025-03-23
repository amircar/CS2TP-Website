<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses'; //Directs to correct table
    public $timestamps = false; //Declares no timestamps in addresses

    protected $fillable = [
        'user_id',
        'address_line1',
        'address_line2',
        'city',
        'postcode',
        'country',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}