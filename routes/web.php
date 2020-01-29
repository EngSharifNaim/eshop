<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::group(['prefix'=>'seller','as'=>'seller.'], function(){
    Route::get('orders', 'OrderController@index')->name('orders');
    Route::get('reports','ReportController@index')->name('reports');
    Route::post('withdraw','WithdrawController@store')->name('make_withdraw');
});
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('users','UserController@index')->name('users');
    Route::get('sellers','UserController@sellers')->name('sellers');
    Route::get('admins','UserController@admins')->name('admins');
    Route::get('orders', 'OrderController@allOrders')->name('allOrders');
    Route::get('reports', 'ReportController@allReports')->name('reports');
    Route::get('withdraw', 'WithdrawController@allWithdraw')->name('withdraw');
    Route::get('admin/reports', 'OrderController@reports')->name('reports');

    Route::get('/SubCategory/{id}', 'SubCategoryController@allProducts')->name('allProducts');


});

Route::get('/user', 'HomeController@user')->name('user');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/withdraw', 'WithdrawController@index')->name('withdraw');
Route::get('/reports', 'OrderController@reports')->name('reports');
Route::get('/SubCategory/{id}', 'SubCategoryController@index')->name('SubCategory');
Route::post('/add_product', 'ProductController@add_product')->name('add_product');
Route::post('/add_product_collection', 'ProductController@add_product_collection')->name('add_product_collection');
Route::get('/delete_product/{id}', 'ProductController@delete_product')->name('delete_product');
Route::post('user/bye_product/{id}', 'ProductController@bye_product');


Route::get('user/show_products/{id}', 'ProductController@show_products')->name('show_products');
Route::post('user/show_products/', 'ProductController@show_filter_products')->name('show_filter_products');
Route::get('user/orders/', 'OrderController@userOrder');
Route::get('user/reports/', 'ReportController@userReports');
Route::get('user/tickets/', 'TicketsController@userTikets');
Route::post('user/send_report/', 'ReportController@sendReport');
Route::post('user/send_ticket/', 'TicketsController@sendTicket');
Route::post('user/send_comment/{id}', 'ReportController@send_comment');
//
//if(Auth::check())
//{
//    View::composer(['*'],function($view){
//        $tickets = \App\Ticket::where('user_id',1)->get();
//        $allreports = \App\Report::where('customer_id',1)->get();
//        $categories = \App\Category::all();
//        $lastOrders = \App\Order::where('seller_id',Auth::User()->id)->take(5)->get();
//        $lastReports = \App\Report::where('seller_id',Auth::User()->id)->take(5)->get();
//
//        $view->with('tickets',$tickets);
//        $view->with('allreports',$allreports);
//        $view->with('categories',$categories);
//        $view->with('lastOrders',$lastOrders);
//        $view->with('lastReports',$lastReports);
//    });
//
//}


