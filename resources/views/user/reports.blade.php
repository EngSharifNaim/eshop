@extends('user.layouts.app')
@section('content')
    <div class="card">
        <div class="page-header-content header-elements-inline">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Reports</span> -
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
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Order ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Seller</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Item Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Report state</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Last reply</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Laset update</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reports as $report)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$report->id}}</td>
                                        <td>{{$report->created_at}}</td>
                                        <td>{{$report->order_id}}</td>
                                        <td>{{'Seller' . $report->order->seller_id}}</td>
                                        <td>{{$report->order->product->subcategory->name}}</td>
                                        <td>{{$report->state}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_report_{{$report->id}}">Replies <i class="icon icon-comment-discussion"></i></button>
                                        </td>
                                        <td>
                                            {{$report->lastReply($report->id)->created_at}}
                                        </td>
                                    </tr>
                                                    @include('user.modals.orderReplies')
{{--                                    @include('user.modals.details')--}}
{{--                                    @include('user.modals.sendReport')--}}

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
