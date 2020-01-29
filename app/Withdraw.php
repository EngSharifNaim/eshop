<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
      'amount','seller_id'
    ];

    public function seller(){
        return $this->belongsTo(User::class,'seller_id','id');
    }
}
