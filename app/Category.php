<?php

namespace App;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function SubCategory(){
        return $this->hasMany(SubCategory::class);
    }
}
