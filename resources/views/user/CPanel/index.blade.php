@extends('user.layouts.app')
@section('content')
    <div class="card">
            <div class="page-header-content header-elements-inline">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Products</span> - {{$subcategory->name}}
                        <small class="d-block text-muted">You have {{count($single_products) . ' ' . $subcategory->name}}s</small>
                    </h5>
                </div>

                <div class="header-elements">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal_theme_info_{{$subcategory->name}}"><i class="icon-add mr-2"></i> Add new {{$subcategory->name}}</button>
                        <button type="button" class="btn btn-outline-warning"><i class="icon-list mr-2"></i> Rules</button>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight mb-0">
                <li class="nav-item"><a href="#single-tab1" class="nav-link active" data-toggle="tab">single {{$subcategory->name}}</a></li>
                <li class="nav-item"><a href="#collection-tab2" class="nav-link" data-toggle="tab">Collection {{$subcategory->name}}</a></li>
                <li class="nav-item"><a href="#collection-tab3" class="nav-link" data-toggle="tab">{{$subcategory->name}} Reports</a></li>
                <li class="nav-item"><a href="#collection-tab4" class="nav-link" data-toggle="tab">{{$subcategory->name}} Orders</a></li>

            </ul>

            <div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
                <div class="tab-pane fade show active" id="single-tab1">
                    @include('user.' . $subcategory->name. '.single_' . $subcategory->name)
                </div>

                <div class="tab-pane fade" id="collection-tab2">
                    @include('user.' . $subcategory->name. '.collection_' . $subcategory->name)
                </div>
                <div class="tab-pane fade" id="collection-tab3">
                    Reports
                </div>
                <div class="tab-pane fade" id="collection-tab4">
                    Orders
                </div>

            </div>
        </div>



    </div>
@endsection
