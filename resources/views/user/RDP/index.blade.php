@extends('user.layouts.app')
@section('content')
    <div class="card">
            <div class="page-header-content header-elements-inline">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Products</span> - {{$subcategory->name}}
                    </h5>
                    <form action="{{url('user/show_products')}}" method="post">
                    <div class="row card-header">
                            @csrf
                        <div class="col-md-3">
                            <div class="form-group">
                                <input hidden name="subcategory" value="{{$subcategory->id}}">
                                <select class="form-control input-sm" name="rdp_country">
                                    <option value="">ALL Countries</option>
                                    <option value="Australia">Australia</option><option value="Canada">Canada</option><option value="Colombia">Colombia</option><option value="Egypt">Egypt</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Japan">Japan</option><option value="Peru">Peru</option><option value="Poland">Poland</option><option value="Singapore">Singapore</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sweden">Sweden</option><option value="Thailand">Thailand</option><option value="Turkey">Turkey</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Vietnam">Vietnam</option></select>                                    </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="filterselect form-control input-sm" name="rdp_windows"><option value="">All Windows Type</option><option value="10">10</option><option value="2008">2008</option><option value="2012">2012</option><option value="2016">2016</option><option value="2019">2019</option></select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="filterselect form-control input-sm" name="rdp_access"><option value="">All Access Type</option><option value="ADMIN">ADMIN</option><option value="USER">USER</option></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="filterselect form-control input-sm" name="rdp_seller">
                                    <option value="">ALL Sellers</option>
                                    @foreach($sellers as $seller)
                                    <option value="{{$seller->id}}">Seller{{$seller->id}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary"><i class="icon-add mr-2"></i> Advance filter</button>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight mb-0">
                <li class="nav-item"><a href="#single-tab1" class="nav-link active" data-toggle="tab">single {{$subcategory->name}}</a></li>
            </ul>

            <div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
                <div class="tab-pane fade show active" id="single-tab1">
                    @include('user.' . $subcategory->name. '.single_' . $subcategory->name)
                </div>

            </div>
        </div>



    </div>
@endsection
