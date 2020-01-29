
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">


        <div class="datatable-scroll">
            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Link</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Description</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Email Number</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Sample</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Country</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Price</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Added at</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Action</th>
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
                                    <td>{{$product->link}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->datacount}}</td>
                                    <td>
                                        <button type="button" class="btn btn-dark">Sample</button>
                                    </td>
                                    <td>{{$product->country}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger">Remove</button>
                                    </td>
                                </tr>
                                @include('seller.modals.edit_rdp')
                            @endforeach
                            </tbody>
            </table>
        </div>

    </div>
