<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\SubCategory;
use App\User;
use SebastianBergmann\Environment\Console;
use Stevebauman\Location\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function add_product(Request $request){
        $good = [];
        $fake = [];
        $errorline =[];
        if($request->collection != Null)
        {
            $collection = $request->collection;
            $i=0;
            $lines = explode(PHP_EOL, $collection);

            foreach ($lines as $line)
            {
                if(count(explode('|',$line)) <> 3)
                {
                    $errorline[] = $line;
                }
                else
                {
                    $ip = explode('|',$line)[0];
                    if(\Location::get($ip))
                    {
                        $good[] = \Location::get($ip)->countryName;
                    }
                    else
                    {
                        $fake[] = $ip;

                    }
                }

            }

        }


        $product = Product::find($request->product_id);
        if($product){
            $product->host_ip = $request->host_ip;
            $product->country = $request->country;
            $product->login = $request->login;
            $product->source = $request->source;
            $product->domain = $request->domain;
            $product->collection_details = $request->collection_details;
            $product->password = $request->password;
            $product->os = $request->windows;
            $product->ram = $request->ram;
            $product->access = $request->access;
            $product->whm = $request->whm;
            $product->price = $request->price;
            $product->detected_hosting = $request->dedecated_host;
            $product->seller_id = Auth::User()->id;
            $product->category_id =0;
            $product->sub_category_id =$request->sub_category_id;
            $product->save();

            $msg = 'new data saved ...';

        }
        else
        {
            if (\Location::get($request->host_ip)) {
                $product = new Product();
                $product->host_ip = $request->host_ip;
                $product->country = \Location::get($request->host_ip)->countryName . ', ' . \Location::get($request->host_ip)->cityName;
                $product->login = $request->login;
                $product->collection_details = $request->collection_details;
                $product->collection = $request->collection;
                $product->source = $request->source;
                $product->domain = $request->domain;
                $product->password = $request->password;
                $product->os = $request->windows;
                $product->ram = $request->ram;
                $product->access = $request->access;
                $product->whm = $request->whm;
                $product->price = $request->price;
                $product->detected_hosting = $request->dedecated_host;
                $product->seller_id = Auth::User()->id;
                $product->category_id = 0;
                $product->sub_category_id = $request->sub_category_id;
                $product->datacount = $request->datacount;
                $product->description = $request->description;
                $product->link = $request->link;
                $product->sample = $request->sample;
                $product->save();
                $msg = 'Item Added successfully...';

            }
            else
            {
                $msg = 'Fake IP';
            }
        }

                    return response()->json([
                        'msg' => $msg,
                        'goodIP' => $good,
                        'fake' => $fake,
                        'errorline' => $errorline

                    ]);
    }

    public function add_product_collection(Request $request){
        $product = new Product();
        $product->price = $request->price;
        $product->collection = $request->collection;
        $product->seller_id = Auth::User()->id;
        $product->category_id =0;
        $product->sub_category_id =$request->sub_category_id;
        $product->save();
        return response()->json([
            'msg' => 'تم الحفظ بنجاح'
        ]);

    }
    public function delete_product($id){
        Product::where('id',$id)->delete();
        return back();
    }

    public function show_products($id=0){
        $single_products = Product::where('sub_category_id',$id)
            ->where('state','unsold')
            ->where('collection',NULL)

            ->get();
        $collection_products = Product::where('sub_category_id',$id)
            ->where('collection','<>',NULL)
            ->get();
        $sellers = User::where('type','seller')->get();

        $categories = Category::all();
        $subcategory = SubCategory::find($id);
//        $ip = \Location::get('1.1.1.1');
//        return $ip;
        return view('user.' . $subcategory->name .'.index',compact('sellers','subcategory','categories','single_products','collection_products'));

    }
    public function show_filter_products(Request $request){
        $query=[];
        if($request->rdp_country)
            $query[] = ['country' , $request->rdp_country] ;

        if($request->rdp_windows)
            $query[] = ['os' , $request->rdp_windows] ;

        if($request->rdp_access)
            $query[] = ['access' , $request->rdp_access] ;

        if($request->rdp_seller)
            $query[] = ['seller_id' , $request->rdp_seller] ;

//        return $query;
        $single_products = Product::where($query)
            ->where('state','unsold')
            ->get() ;

        $sellers = User::where('type','seller')->get();

        $categories = Category::all();
        $subcategory = SubCategory::find($request->subcategory);
//        $ip = \Location::get('1.1.1.1');
//        return $ip;
        return view('user.' . $subcategory->name .'.index',compact('sellers','subcategory','categories','single_products'));

    }
    public function bye_product(Request $request,$id)
    {
        $user = User::find(Auth::User()->id);

        if(Hash::check($request->pay_password,$user->password))
        {
            $product = Product::find($id);
            $order = new Order();

            $order ->user_id = Auth::User()->id;
            $order ->seller_id = $product->seller_id;
            $order ->product_id = $product->id;
            $order ->product_price = $product->price;
            $order->save();

            $user->amount -= $product->price;
            $user->save();

            return response()->json([
                'msg' => $user->amount
            ]);
        }
        else
        {
            return response()->json([
                'msg' => $request->pay_password
            ]);
        }


    }
}
