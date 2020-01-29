<div id="modal_theme_info_sendReport_{{$order->order_id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Send report   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>


                <div class="modal-body">

                    <div class="card-body">

                        <form action="{{url('user/send_report')}}" id="add_rdp_collection" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <input type="text" name="order_id_disabled" value="Order ID: {{$order->order_id}}" class="form-control" disabled>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list"></i></span>
                                                </span>
                                            <input type="text" hidden name="order_id" value="{{$order->order_id}}" class="form-control">
                                            <textarea rows="8" type="text" name="details" class="form-control" placeholder="Problem discription ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn bg-warning"><i class="icon icon-warning"></i>  Send report</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
