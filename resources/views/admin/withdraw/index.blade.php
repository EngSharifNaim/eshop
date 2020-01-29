@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="page-header-content header-elements-inline">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Withdraws</span>
                    <small class="d-block text-muted">Your current amount as : {{Auth::User()->amount}} <i class="icon icon-price-tag"></i></small>
                </h5>
            </div>

            <div class="header-elements">
                {{--                    <div class="text-center">--}}
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_withdraw"><i class="icon-add mr-2"></i> Make withdraw</button>
                {{--                        @if($subcategory->has_collection !=1)--}}
                {{--                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal_theme_info_{{str_replace(' ','',$subcategory->name)}}_collection"><i class="icon-add mr-2"></i> Add new {{$subcategory->name}} Collection</button>--}}
                {{--                        @endif--}}
                {{--                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal_theme_info_rule"><i class="icon-list mr-2"></i> Rules</button>--}}
                {{--                    </div>--}}
            </div>
        </div>
        <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="datatable-scroll">
                    <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Seller</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Date sent</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Amount</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">State</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"></th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdraws as $withdraw)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{$withdraw->id}}</td>
                                <td>{{$withdraw->seller->name}}</td>
                                <td>{{$withdraw->created_at}}</td>
                                <td>{{$withdraw->amount}}</td>
                                <td>{{$withdraw->state}}</td>
                                <td class="text-center">

                                </td>
                                <td>
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-droplet"></i> Rejict</a>
                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=""><i class="icon-database-edit2"></i> Approve</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>



    </div>
    @include('seller.modals.withdraw')
@endsection
