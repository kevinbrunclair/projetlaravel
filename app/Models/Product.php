<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

//    public function orderproducts()
//    {
//        return $this->hasMany(Orderproduct::class);
//    }
}
