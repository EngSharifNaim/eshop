<div id="modal_theme_info_withdraw" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Make withdraw   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">

                <div class="card-body">

                    <form action="#" id="make_withdraw" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-float">
                                    <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-price-tag"></i></span>
                                                </span>
                                        <input type="text" name="seller_id" value="{{Auth::User()->id}}" class="form-control" hidden>
                                        <input type="number" name="amount" class="form-control" placeholder="Amoount ...">
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
    $('#make_withdraw').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{route("seller.make_withdraw")}}',
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
                    if(data.msg == 'low')
                    {
                        alert('Your amount is not enough...')
                    }
                    else
                    {
                        location.reload();
                    }


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
