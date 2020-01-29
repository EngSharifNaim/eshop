<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ReplyComment;
class ReportReply extends Model
{
    public function replycomment(){
        return $this->hasMany(ReplyComment::class);
    }
}
