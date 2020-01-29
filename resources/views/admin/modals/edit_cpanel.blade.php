<div id="modal_theme_info_editCPanel_{{$product->id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Edit {{$subcategory->name}}  product </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">
                    <br>
                    <div class="card-body">
                        <form action="#" id="edit_cpanel" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <input type="text" value="{{$product->host_ip}}" name="host_ip" class="form-control" placeholder="Host IP ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" value="{{$product->domain}}" name="host_ip" class="form-control" placeholder="Domain ...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                            <input type="text" value="{{$product->login}}" class="form-control"  name="login" placeholder="Login ...">

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-enter"></i></span>
                                                </span>
                                            <input type="text" value="{{$product->password}}" class="form-control"  name="password" placeholder="Password ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                            <select name="country" class="form-control" placeholder="Country ...">
                                                <option value="0">Select Country</option>
                                                <option value="US">US</option>
                                                <option value="DE">DE</option>
                                                <option value="USA">USA</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                            <select name="source" class="form-control" placeholder="Source ...">
                                                <option value="0">Source</option>
                                                <option value="Hacked" @if($product->source == 'Hacked') selected @endif>Hacked</option>
                                                <option value="Created"@if($product->source == 'Created') selected @endif>Created</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group form-group-float">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-price-tag"></i></span>
                                                </span>
                                                <input type="text" value="{{$product->price}}" name="price" class="form-control" placeholder="Price ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group form-group-float">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-price-tag"></i></span>
                                                </span>
                                                <input disabled="" type="text" value="{{$product->state}}" name="state" class="form-control" placeholder="Price ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn bg-primary"><i class="icon icon-database-insert"></i>  Save</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#edit_cpanel').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{route("add_product")}}',
            method:'post',
            data:  new FormData(this),
            // dataType:'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    $('#saveWithOutPrint').attr('disabled', false);

                    alert(data.msg)
                    location.reload();



                }
            }
        })
    });

</script>
