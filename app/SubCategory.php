<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class SubCategory extends Model
{
    public function Product(){
        return $this->hasMany(Product::class);
    }
}
