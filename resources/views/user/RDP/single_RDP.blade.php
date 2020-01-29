<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
    <div class="datatable-scroll">
        <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">ID</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Seller</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Country</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Windows</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Ram</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Access</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Hosting</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Price</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Added at</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($single_products as $product)
                <tr role="row" class="odd">
                    <td class="sorting_1">{{$product->id}}</td>
                    <td>{{'Seller' . $product->user->id}}</td>
                    <td>{{$product->country}}</td>
                    <td>{{$product->os}}</td>
                    <td>{{$product->ram}}</td>
                    <td>{{$product->access}}</td>
                    <td>{{$product->detected_hosting}}</td>
                    <td>{{$product->price}} <i class="icon-price-tag"></i></td>
                    <td>{{$product->created_at}}</td>
                    <td><span @if($product->state == 'unsold')class="badge badge-success" @else class="badge badge-danger" @endif>{{$product->state}}</span></td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_bye_{{$product->id}}"><i class="icon icon-select2"></i> Buy</button>
                    </td>
                </tr>
                @include('user.modals.bye')
            @endforeach
            </tbody>
        </table>
    </div>

</div>
