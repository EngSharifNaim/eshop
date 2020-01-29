<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class SubCategoryController extends Controller
{
    public function index($id){
        $categories = Category::all();
        $subcategory = SubCategory::find($id);
        $single_products = Product::where('seller_id',Auth::User()->id)
        ->where('sub_category_id',$id)
            ->where('collection',NULL)
        ->get();
        $collection_products = Product::where('seller_id',Auth::User()->id)
        ->where('sub_category_id',$id)
            ->where('collection','<>',NULL)
        ->get();

        $orders = DB::table('products')
            ->join('orders','orders.product_id','products.id')
            ->join('users','orders.user_id','users.id')
            ->join('sub_categories','products.sub_category_id','sub_categories.id')
            ->where('sub_categories.id',$id)
            ->select('orders.id','orders.created_at','orders.state','users.name as customer','orders.product_price')
            ->get();
        $reports = DB::table('reports')
                    ->join('orders','reports.order_id','orders.id')
            ->join('users','reports.customer_id','users.id')
            ->join('products','orders.product_id','products.id')
            ->join('sub_categories','products.sub_category_id','sub_categories.id')
            ->where('sub_categories.id',$id)
            ->select('reports.order_id','reports.id','users.name as customer','reports.created_at','reports.state','sub_categories.name as type','products.price as price')
            ->get();
//        return $reports;
        return view('seller.subcategories.index',compact('subcategory','categories','single_products','collection_products','orders','reports'));
    }
    public function allProducts($id){
        $categories = Category::all();
        $subcategory = SubCategory::find($id);
        $single_products = Product::where('sub_category_id',$id)
            ->where('collection',NULL)
        ->get();
        $collection_products = Product::where('sub_category_id',$id)
            ->where('collection','<>',NULL)
        ->get();

        $orders = DB::table('products')
            ->join('orders','orders.product_id','products.id')
            ->join('users','orders.user_id','users.id')
            ->join('sub_categories','products.sub_category_id','sub_categories.id')
            ->where('sub_categories.id',$id)
            ->select('orders.id','orders.created_at','orders.state','users.name as customer','orders.product_price')
            ->get();
        $reports = DB::table('reports')
                    ->join('orders','reports.order_id','orders.id')
            ->join('users','reports.customer_id','users.id')
            ->join('products','orders.product_id','products.id')
            ->join('sub_categories','products.sub_category_id','sub_categories.id')
            ->where('sub_categories.id',$id)
            ->select('reports.order_id','reports.id','users.name as customer','reports.created_at','reports.state','sub_categories.name as type','products.price as price')
            ->get();
//        return $reports;
        return view('admin.subcategories.index',compact('subcategory','categories','single_products','collection_products','orders','reports'));
    }
}
