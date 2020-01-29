
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">


        <div class="datatable-scroll">
            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">SMTP Info</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Web Mail</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Country</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Hosting</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Price</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Added at</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
{{--                                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" >Actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($single_products as $product)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{url('delete_product' . '/' . $product->id)}}" class="dropdown-item"><i class="icon-droplet"></i> Delete Product</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_info_edit{{$subcategory->name . '_' . $product->id}}"><i class="icon-database-edit2"></i> Edit Product</a>
                                                </div>
                                            </div>
                                        </div>
                                         {{$product->id}}
                                    </td>
                                    <td>{{$product->smtp_info}}</td>
                                    <td>{{$product->webmail}}</td>
                                    <td>{{$product->country}}</td>
                                    <td>{{$product->detected_hosting}}</td>
                                    <td>{{$product->price}} <i class="icon-price-tag"></i></td>
                                    <td>{{$product->created_at}}</td>
                                    <td><span @if($product->state == 'unsold')class="badge badge-success" @else class="badge badge-danger" @endif>{{$product->state}}</span></td>
{{--                                    <td class="text-center">--}}
{{--                                        <div class="list-icons">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <a href="#" class="list-icons-item" data-toggle="dropdown">--}}
{{--                                                    <i class="icon-menu9"></i>--}}
{{--                                                </a>--}}

{{--                                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                                    <a href="{{url('delete_product' . '/' . $product->id)}}" class="dropdown-item"><i class="icon-droplet"></i> Delete Product</a>--}}
{{--                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_info_edit{{$subcategory->name . '_' . $product->id}}"><i class="icon-database-edit2"></i> Edit Product</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
                                </tr>
                                @include('seller.modals.edit_rdp')
                            @endforeach
                            </tbody>
            </table>
        </div>

    </div>
{{--<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">--}}
{{--    <div class="datatable-scroll">--}}
{{--        <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">--}}
{{--            <tbody>--}}
{{--            @foreach($single_products as $product)--}}
{{--                <tr role="row" class="odd">--}}
{{--                    <td class="sorting_1">{{$product->id}}</td>--}}
{{--                    <td>{{$product->host_ip}}</td>--}}
{{--                    <td>{{$product->login}}</td>--}}
{{--                    <td>{{$product->password}}</td>--}}
{{--                    <td>{{$product->country}}</td>--}}
{{--                    <td>{{$product->os}}</td>--}}
{{--                    <td>{{$product->access}}</td>--}}
{{--                    <td>{{$product->detected_hosting}}</td>--}}
{{--                    <td>{{$product->price}} <i class="icon-price-tag"></i></td>--}}
{{--                    <td>{{$product->created_at}}</td>--}}
{{--                    <td><span @if($product->state == 'unsold')class="badge badge-success" @else class="badge badge-danger" @endif>{{$product->state}}</span></td>--}}
{{--                    <td class="text-center">--}}
{{--                        <div class="list-icons">--}}
{{--                            <div class="dropdown">--}}
{{--                                <a href="#" class="list-icons-item" data-toggle="dropdown">--}}
{{--                                    <i class="icon-menu9"></i>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <a href="{{url('delete_product' . '/' . $product->id)}}" class="dropdown-item"><i class="icon-droplet"></i> Delete Product</a>--}}
{{--                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_info_edit{{$subcategory->name . '_' . $product->id}}"><i class="icon-database-edit2"></i> Edit Product</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @include('modals.edit_rdp')--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--</div>--}}
