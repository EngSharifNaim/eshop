<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function seller()
    {
        return $this->belongsTo(User::class,'seller_id','id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
