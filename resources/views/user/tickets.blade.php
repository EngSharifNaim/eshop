@extends('user.layouts.app')
@section('content')
    <div class="card">
        <div class="page-header-content header-elements-inline">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Tickets</span>
                    <small class="d-block text-muted">You have 7 RDPs</small>
                </h5>
            </div>

            <div class="header-elements">
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_sendTicket"><i class="icon-add mr-2"></i> Add new Tickets</button>
                </div>
            </div>
        </div>        <div class="card-body">
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
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">State</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Last reply</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Laset update</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$ticket->id}}</td>
                                        <td>{{$ticket->created_at}}</td>
                                        <td>{{$ticket->title}}</td>
                                        <td>{{$ticket->state}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_theme_info_report_{{$ticket->id}}">Replies <i class="icon icon-comment-discussion"></i></button>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
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
    @include('user.modals.sendTicket')

@endsection

