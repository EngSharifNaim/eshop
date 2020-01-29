<div id="modal_theme_info_PhoneMarketing" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Add New {{$subcategory->name}}   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">
                    <br>
                    <div class="card-body">

                        <form action="#" id="add_phone_marketing" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <input type="text" name="link" class="form-control" placeholder="Link ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list3"></i></span>
                                                </span>
                                            <input type="text" name="description" class="form-control" placeholder="Description ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list3"></i></span>
                                                </span>
                                            <textarea type="text" rows="5" name="sample" class="form-control" placeholder="Sample ..."></textarea>
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
                                                    <span class="input-group-text"><i class="icon-list-numbered"></i></span>
                                                </span>
                                            <input type="text" name="datacount" class="form-control" placeholder="Email number ...">
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
                                                <input type="text" name="price" class="form-control" placeholder="Price ...">
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
    $('#add_phone_marketing').on('submit', function(event){
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

                    location.reload();



                }
            }
        })
    });

</script>
