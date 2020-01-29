<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function index(){
            $withdraws = Withdraw::where('seller_id',Auth::User()->id)->get();
            return view('seller.withdraw.index',compact('withdraws'));

    }
    public function allWithdraw(){
            $withdraws = Withdraw::all();
            return view('admin.withdraw.index',compact('withdraws'));

    }

    public function store(Request $request){
        $user = User::find(Auth::User()->id);
        if($request->amount <= $user->amount)
        {
            $data = $request->input();
            $withdraw = Withdraw::create($data);
            $msg = 'success';
        }
        else
        {
            $msg = 'low';
        }
        return response()->json([
            'msg' => $msg,
        ]);
    }
}
