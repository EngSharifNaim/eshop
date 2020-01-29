@extends('user.layouts.app')
@section('content')
    <div class="card">
        <div class="page-header-content header-elements-inline">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Orders</span> -
{{--                    {{$subcategory->name}}--}}
                </h5>
            </div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight mb-0">
                <li class="nav-item"><a href="#single-tab1" class="nav-link active" data-toggle="tab">single
{{--                        {{$subcategory->name}}--}}
                    </a></li>
            </ul>

            <div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
                <div class="tab-pane fade show active" id="single-tab1">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                        <div class="datatable-scroll">
                            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Added at</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Seller</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Item</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">View</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Report</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$order->id}}</td>
                                        <td>{{$order->date}}</td>
                                        <td>{{'Seller' . $order->seller_id}}</td>
                                        <td>{{$order->category_name}}</td>
                                        <td>{{$order->sub_category_name}}</td>
                                        <td>{{$order->price}}<i class="icon-price-tag"></i></td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_details_{{$order->order_id}}"><i class="icon icon-display"></i> Details</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_theme_info_sendReport_{{$order->order_id}}">Send report <i class="icon icon-warning"></i></button>
                                        </td>
                                    </tr>
                                    {{--                @include('user.modals.bye')--}}
                                    @include('user.modals.sendReport')
                                    @include('user.modals.details')

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>



    </div>
@endsection
