<?php

namespace App\Providers;
use App\Ticket;
use App\Report;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        view()->share('categories',$categories);
//
//        if(Auth::check())
//        {
//            $tickets = Ticket::where('user_id',1)->get();
//            $allreports = Report::where('customer_id',1)->get();
//            $lastOrders = Order::where('seller_id',Auth::User()->id)->take(5)->get();
//            $lastReports = Report::where('seller_id',Auth::User()->id)->take(5)->get();
//
//            view()->share('tickets', $tickets);
//            view()->share('allreports',$allreports);
//            view()->share('lastOrders',$lastOrders);
//            view()->share('lastReports',$lastReports);
//        }


    }
}
