<div id="modal_theme_info_details_{{$order->order_id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Product details   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>


                <div class="modal-body">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">
                                <a href="#" class="text-default">
                                    {{$order->price}} $
                                </a>
                            </h1>
                            <ul class="list list-unstyled mb-0">
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Seller: Seller{{$order->seller_id}}
                                </li>
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Login: {{$order->login}}
                                </li>
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Hosting IP: {{$order->host_ip}}
                                    </li>
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    RAM: {{$order->ram}}
                                </li>
                                <li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Password: {{$order->password}}
                                </li>
                                <li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Dedcated host: {{$order->detected_hosting}}
                                </li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Access : {{$order->access}}
                                </li>
                                <li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Added at: {{$order->date}}
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                                <button type="submit" class="btn bg-warning" data-dismiss="modal">Close <i class="icon icon-exit"></i></button>
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>
