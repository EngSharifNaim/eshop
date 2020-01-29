<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
    <div class="datatable-scroll">
        <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Count</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Seller</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Details</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Price</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">state</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Sample</th>
                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($collection_products as $product)
                <tr role="row" class="odd">
                    <td class="sorting_1">{{$product->id}}</td>
                    <td>100 {{$subcategory->name}}</td>
                    <td>{{$product->user->name}}</td>
                    <td>{{$product->collection_details}}</td>
                    <td>{{$product->price}}</td>
                    <td><span @if($product->state == 'unsold')class="badge badge-success" @else class="badge badge-danger" @endif>{{$product->state}}</span></td>
                    <td><button type="button" class="btn btn-dark small" data-toggle="modal" data-target="#modal_theme_info_sample_{{$product->id}}">Sample</button></td>
                    <td class="text-center">
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
                    </td>
                </tr>
                @include('seller.modals.edit_rdp')
                @include('seller.modals.sample')
            @endforeach
            </tbody>
        </table>
    </div>

</div>
