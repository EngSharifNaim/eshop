<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Category;
use App\Ticket;
use App\Report;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::User()->type =='Admin')
        {
//            return  $lastOrder;
            return view('admin.home');
        }
        if(Auth::User()->type =='Seller')
        {
//            return  $lastOrder;
            return view('seller.home');
        }
        if(Auth::User()->type =='User')
        {
            return view('user.index');
        }


    }
    public function user(){
        $categories = Category::all();
        return view('user.index',compact('categories'));
    }
}
