<div id="modal_theme_info_editRDP_{{$product->id}}_collection" class="modal fade"  style="padding-right: 15px;">
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
                        <form action="#" onsubmit="editRDPCollection({{$product->id}})" id="edit_rdp_collection_{{$product->id}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <input type="text" hidden name="product_id" value="{{$product->id}}" class="form-control">
                                            <textarea rows="8" type="text" name="collection" class="form-control" placeholder="Host IP|Login|Password;">{{$product->collection}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list3"></i></span>
                                                </span>
                                            <textarea rows="3" type="text" name="collection_details" class="form-control" placeholder="Collection details ...">{{$product->collection_details}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-price-tag"></i></span>
                                                </span>
                                            <input type="text" id="price" name="price" value="{{$product->price}}" class="form-control" placeholder="Price ...">
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
    function editRDPCollection(id)
    {
        // alert(document.getElementById('edit_rdp_' + id))
        $('#edit_rdp_' + id).on('submit',function (event) {
            enent.preventDefault();
        })
        $.ajax({
            url: '{{route("add_product")}}',
            method: 'post',
            data: new FormData(document.getElementById('edit_rdp_collection_' + id)),
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
