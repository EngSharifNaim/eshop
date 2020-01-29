@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Reports History</h5>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">
                            ID
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Type</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Seller</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Customer</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Sent at</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Order ID</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Order Price</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">State</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Discution</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allreports as $report)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{$report->id}}</td>
                        <td>{{$report->order->product->subcategory->name}}</td>
                        <td class="text-center">
                            {{$report->seller->name}}
                        </td>
                        <td class="text-center">
                            {{$report->customer->name}}
                        </td>
                        <td>{{$report->created_at}}</td>
                        <td>{{$report->order_id}}</td>
                        <td>{{$report->order->product_price}}</td>
                        <td>{{$report->state}}</td>
                                               <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_report_{{$report->id}}">Replies <i class="icon icon-comment-discussion"></i></button>
                        </td>
                        <td>
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-droplet"></i> Rejict</a>
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target=""><i class="icon-database-edit2"></i> Refund</a>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    @include('user.modals.orderReplies')
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
<script>
    function show_edit(id)
    {
        $('#comment_reply_' + id).show()
    }
    function send_comment(id,sender) {
        $('#send_comment_form_' + id).on('submit',function (event) {
            event.preventDefault();
        });
        $('#comment_reply_' + id).on('keypress',function (event) {
            if(event.keyCode === 13) {

                $.ajax({
                    url: '{{url('user/send_comment')}}' + '/' + id,
                    method: 'post',
                    data: new FormData(document.getElementById('send_comment_form_' + id)),
                    // dataType:'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                    },
                    success: function (data) {

                        $('#comment_reply_' + id).empty();
                        $('#comment_reply_' + id).hide();
                        comment = '<div class="media flex-column flex-md-row">' +
                            '<div class="mr-md-3 mb-2 mb-md-0">' +
                            '<a href="#">' +
                            '<img src="images/user.png" class="rounded-circle" width="38" height="38" alt=""></a></div><div class="media-body"><div class="media-title">' +
                            '<a href="#" class="font-weight-semibold">' +
                            sender +
                            '</a><span class="text-muted ml-3">10 minutes ago</span></div><p>' +
                            $('#comment_reply_' + id).val() +
                            '</p></div></div>'
                        $('#comments_' + id).append(comment)
                    },
                    // error: function(xhr, status, error) {
                    //     var err = JSON.parse(xhr.responseText);
                    //     alert(err.Message);
                    // }
                });
            }
        });




    }
</script>
