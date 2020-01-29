<?php

namespace App;

use App\User;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'seller_id','id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }
}
