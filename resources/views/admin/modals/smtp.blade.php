<div id="modal_theme_info_SMTPs" class="modal fade"  style="padding-right: 15px;">
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

                        <form action="#" id="add_smtp" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <input type="text" name="host_ip" class="form-control" placeholder="Host IP ...">
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
                                            <select name="whm" class="form-control" placeholder="WHM ...">
                                                <option value="0">WHM</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon icon-enter"></i></span>
                                                </span>
                                            <input type="text" class="form-control"  name="password" placeholder="Password ...">
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
                                                    <span class="input-group-text"><i class="icon-server"></i></span>
                                                </span>
                                            <input type="text" name="dedecated_host" class="form-control" placeholder="Dedecated Host">
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
                                <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="icon icon-close2"></i> Close</button>
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
    $('#add_smtp').on('submit', function(event){
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

                            // alert(data.msg)
                            location.reload()



            }
        })
    });

</script>
