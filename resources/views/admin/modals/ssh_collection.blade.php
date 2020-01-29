<div id="modal_theme_info_SSH_collection" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Add New {{$subcategory->name}} collection  </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <div class="card">

                    <br>
                    <div class="card-body">
                        <div class="alert alert-warning alert-styled-left alert-dismissible fakeData" style="display: none">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
                        </div>
                        <form action="#" id="add_ssh_collection" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <textarea rows="8" type="text" name="collection" class="form-control" placeholder="Host IP|Login|Password;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list3"></i></span>
                                                </span>
                                            <textarea rows="3" type="text" name="collection_details" class="form-control" placeholder="Collection details ..."></textarea>
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
                                            <input type="text" id="price" name="price" class="form-control" placeholder="Price ...">
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
    $('#add_ssh_collection').on('submit', function(event){
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

                    if(data.fake !='')
                    {
                        $('.fakeData').show()
                        $('.fakeData').empty()

                        if(data.fake.length >0)
                        {
                            $('.fakeData').append(
                                '<strong>Fake IPs:</strong> you have ' + data.fake.length + ' fake IP <br>' + data.fake + '<br>' + '<strong>Error lines:</strong> you have ' + data.errorline.length + ' error line <br>' + data.errorline + '<br>'
                            )
                        }



                        // alert('you have ' + data.fake.length +' fake ips : ' + data.fake + 'error lines: ' + data.errorline.length)
                    }

                    // location.reload()



                }
            }
        })
    });

</script>
