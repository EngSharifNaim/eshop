<div id="modal_theme_info_RDP" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Add New {{$subcategory->name}}   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">

                <div class="card-body">

                    <form action="#" id="add_rdp" method="post">
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
                                        <input type="text" id="login" name="login" class="form-control" placeholder="Login ...">
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
                                                    <span class="input-group-text"><i class="icon-store2"></i></span>
                                                </span>
                                        <input type="text" class="form-control"  name="ram" placeholder="RAM ...">


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
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn bg-primary"><i class="icon icon-database-insert"></i>  Save</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#add_rdp').on('submit', function(event){
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
                    $('#saveWithOutPrint').attr('disabled', false);

                    location.reload();

            },
            // error: function(xhr, status, error) {
            //     var err = JSON.parse(xhr.responseText);
            //     alert(err.Message);
            // }
        })
    });
    $(document).ajaxError(
        function (event, jqXHR, ajaxSettings, thrownError) {
            if(thrownError='Internal Server Error')
            alert('IP Host doest not exist...' );
        });

</script>
