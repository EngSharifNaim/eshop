<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\User;
use App\ReportReply;
use App\ReplyComment;
class Report extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id','id');
    }
    public function seller()
    {
        return $this->belongsTo(User::class,'seller_id','id');
    }

    public function reply(){
        return $this->hasMany(ReportReply::class,'report_id','id');
    }
    public function lastReply($id){
        $date = ReportReply::where('report_id',$id)->orderBy('created_at','DESC')->first();
        if($date)
            return json_decode($date);
        else
            return '';

    }
}
