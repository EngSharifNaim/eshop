<div id="modal_theme_info_bye_{{$product->id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Bye now   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>


                <div class="modal-body">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">
                                <a href="#" class="text-default">
                                    {{$product->price}} $
                                </a>
                            </h1>
                            <ul class="list list-unstyled mb-0">
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Seller: Seller{{$product->user->id}}
                                </li>
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Country: {{$product->country}}
                                </li>
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Windows: {{$product->os}}
                                    </li>
                                <li>
                                    <i class="icon-checkmark-circle text-success mr-2"></i>
                                    RAM: {{$product->ram}}
                                </li>
                                <li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Access: {{$product->access}}
                                </li>
                                <li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Dedcated host: {{$product->detected_host}}
                                </li>
                                <li>
                                <i class="icon-checkmark-circle text-success mr-2"></i>
                                    Added at: {{$product->created_at}}
                                </li>
                                <li>
                                    Are you sure that you want to get this product?
                                </li>
                            </ul>
                        </div>

                        <div class="card-footer text-center">
                            @if(Auth::User()->amount < $product->price)
                                <i class="btn bg-grey-600" data-dismiss="modal">
                                    <i class="icon-paypal mr-2"></i>
                                    Sorry, your amount is not enough
                                </i>
                                @else
                                <form action="#" class="bye_product" onsubmit="bye_product({{$product->id}})" id="bye_product_{{$product->id}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <input type="password" class="form-control" placeholder="Password..." name="pay_password" id="pay_password_{{$product->id}}" style="display: none">
                                        </div>
                                        <div class="col col-md-4">
                                            <button type="submit" class="btn bg-warning">
                                                <i class="icon-paypal mr-2"></i>
                                                Yes, I want bye
                                            </button>

                                        </div>
                                    </div>
{{--                                    <input type="text" hidden name="product_id_{{$product->id}}" id="product_id_{{$product->id}}">--}}
                                </form>

                                @endif
                        </div>
                    </div>            </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.bye_product').on('submit', function(event) {
        event.preventDefault();
    })
    function bye_product(id)
    {


        if(document.getElementById('pay_password_' + id).value == '')
        {
            $('#pay_password_' + id).show()
            $('#pay_password_' + id).attr('required','true')
        }
        else
        {
            $.ajax({
                url:'{{url('user/bye_product')}}' + '/' + id,
                method:'post',
                data:  new FormData(document.getElementById('bye_product_' + id)),
                // dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend:function(){
                },
                success:function(data)
                {

                    alert(data.msg)

                },
                // error: function(xhr, status, error) {
                //     var err = JSON.parse(xhr.responseText);
                //     alert(err.Message);
                // }
            });
        }

    }

</script>
