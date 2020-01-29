<div id="modal_theme_info_editRDP_{{$product->id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Edit {{$subcategory->name}}  product </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">
                    <div class="card-header customer_exist" style="display: none">
                        <div class="alert alert-styled-left alert-styled-custom alert-arrow-left alpha-teal border-teal alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">هذا المشترك موجود مسبقا ! بامكانك تحديث بياناته من خلال الضغط على زر حفظ</span>
                        </div>
                    </div>
                    <br>
                    <div class="card-body">
                        <form action="#" onsubmit="editRDP({{$product->id}})" id="edit_rdp_{{$product->id}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <input type="text" hidden name="product_id" value="{{$product->id}}" class="form-control">
                                            <input type="text" value="{{$product->host_ip}}" name="host_ip" class="form-control" placeholder="Host IP ...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-user-lock"></i></span>
                                                </span>
                                            <input type="text" value="{{$product->login}}" id="login" name="login" class="form-control" placeholder="Login ...">
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
                                                    <span class="input-group-text"><i class="icon icon-windows"></i></span>
                                                </span>
                                            <select name="windows" class="form-control" placeholder="Windows ...">
                                                <option value="0">Windows</option>
                                                <option value="2012">2012</option>
                                                <option value="2016">2016</option>
                                                <option value="2008">2008</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-accessibility"></i></span>
                                                </span>
                                            <select name="access" class="form-control" placeholder="Access ...">
                                                <option value="0">Acess</option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" value="{{$product->detected_hosting}}" name="dedecated_host" class="form-control" placeholder="Dedecated Host">
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
    function editRDP(id)
    {
        // alert(document.getElementById('edit_rdp_' + id))
        $('#edit_rdp_' + id).on('submit',function (event) {
            event.preventDefault();
        })
        $.ajax({
            url: '{{route("add_product")}}',
            method: 'post',
            data: new FormData(document.getElementById('edit_rdp_' + id)),
            // dataType:'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
            },
            success: function (data) {
                if (data.error) {
                    var error_html = '';
                    for (var count = 0; count < data.error.length; count++) {
                        error_html += '<p>' + data.error[count] + '</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                } else {
                    $('#saveWithOutPrint').attr('disabled', false);

                    alert(data.msg)
                    location.reload();


                }
            }
        })
    }

</script>
