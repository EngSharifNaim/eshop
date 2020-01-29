<?php

namespace App\Http\Controllers;

use App\Report;
use App\Category;
use App\ReportReply;
use App\ReplyComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(){
        $allreports = Report::where('seller_id',Auth::User()->id)->get();
//        return $allreports;
        return view('seller.reports.index',compact('allreports'));
    }
    public function allReports(){
        $allreports = Report::all();
//        return $allreports;
        return view('admin.reports.index',compact('allreports'));
    }
    public function sendReport(Request $request)
    {
        $report = new Report();
        $report->order_id = $request->order_id;
        $report->details = $request->details;
        $report->customer_id = Auth::User()->id;
        $report->save();

        $reply = new ReportReply();
        $reply->comment = $request->details;
        $reply->user_type = 'User';
        $reply->user_id = Auth::User()->id;
        $reply->report_id = $report->id;
        $reply->save();
        return back();
    }
    public function userReports(){
        $reports = Report::with(['order'])
            ->with(['reply'])
        ->where('customer_id',Auth::User()->id)
            ->get();
        $categories = Category::all();

//        return $reports;
        return view('user.reports',compact('reports','categories'));
    }

    public function send_comment($id,Request $request){
        $comment = new ReplyComment();
        $comment->report_reply_id = $id;
        $comment->comment = $request->comment_reply;
        $comment->user_id = Auth::User()->id;
        $comment->user_type = Auth::User()->type;
        $comment->save();
        return response()->json([
            'msg' => 'added'
        ]);

    }
}
