<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderproducts()
    {
        return $this->hasMany(Orderproduct::class);
    }
}
