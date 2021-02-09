<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'description','city_id', 'status', 'invoice_id','price'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}