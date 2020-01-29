<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Order;
use DB;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('seller_id',Auth::User()->id)->get();
        $categories = Category::all();

        return view('seller.sales.index',compact('orders','categories'));
    }
    public function allOrders(){
        $orders = Order::all();
        $categories = Category::all();

        return view('admin.sales.index',compact('orders','categories'));
    }
    public function userOrder(){
        $orders = DB::table('orders')
            ->join('products','orders.product_id','products.id')
            ->join('sub_categories','products.sub_category_id','sub_categories.id')
            ->join('categories','products.category_id','categories.id')
            ->join('users','orders.seller_id','users.id')
        ->where('orders.user_id',Auth::User()->id)
        ->select('sub_categories.name as sub_category_name','categories.name as category_name','orders.id as order_id','orders.product_price as price', 'orders.created_at as date','users.id as user_id','users.name as user_name','products.*')
            ->get();
        $categories = Category::all();

        return view('user.orders',compact('orders','categories'));
    }
    public function reports(){
        $categories = Category::all();

        return view('seller.reports.index',compact('categories'));

    }
}
