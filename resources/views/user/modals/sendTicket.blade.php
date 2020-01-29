<div id="modal_theme_info_sendTicket" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Send report   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>


                <div class="modal-body">

                    <div class="card-body">

                        <form action="{{url('user/send_ticket')}}" id="send_ticket" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <input type="text" name="ticket_title" placeholder="Ticket title ..." class="form-control">

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
                                            <textarea rows="8" type="text" name="ticket_body" class="form-control" placeholder="Ticket details ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn bg-primary"><i class="icon icon-warning"></i>  Send Ticket</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
