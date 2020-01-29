@extends('seller.layouts.app')
@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Orders History</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        Number Of Orders : 20
    </div>

    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
        <div class="datatable-scroll">
            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Date</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Customer</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Seller</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Product</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">State</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                 <tr role="row" class="odd">
                    <td class="sorting_1">{{$order->id}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->customer->name}}</td>
                    <td>{{$order->seller->name}}</td>
                    <td>{{$order->product_price}}</td>
                    <td class="text-center">
                        {{$order->product->subcategory->name}}
                    </td>
                    <td class="text-center">
                        {{$order->state}}
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
    @endsection
