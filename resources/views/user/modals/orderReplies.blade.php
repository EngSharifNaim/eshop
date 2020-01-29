<div id="modal_theme_info_report_{{$report->id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> Report discussion area   </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>


                <div class="modal-body">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title font-weight-semibold">Discussion</h6>
                            <div class="header-elements">
                                <ul class="list-inline list-inline-dotted text-muted mb-0">
                                    <li class="list-inline-item">{{count($report->reply)}} comments</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="media-list">
                                @foreach($report->reply as $reply)

                                <li class="media flex-column flex-md-row">
                                    <div class="mr-md-3 mb-2 mb-md-0">
                                        <a href="#"><img src="{{url('images/user.png')}}" class="rounded-circle" width="38" height="38" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#" class="font-weight-semibold">{{$reply->user_type}}</a>
                                            <span class="text-muted ml-3">{{$reply->created_at->diffForHumans()}}</span>
                                        </div>

                                        <p>{{$reply->comment}}</p>

                                        <ul class="list-inline list-inline-dotted font-size-sm">
                                            <li class="list-inline-item">
                                                <a href="#" onclick="show_edit({{$reply->id}})">Reply</a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline list-inline-dotted font-size-sm">
                                            <form action="{{url('user/send_comment')}}" method="post" id="send_comment_form_{{$reply->id}}">
                                                @csrf
                                                <input type="text" onkeypress="send_comment({{$reply->id . ',"' . $reply->user_type . '"'}})" class="form-control" name="comment_reply" id="comment_reply_{{$reply->id}}" style="display: none">
                                            </form>
                                        </ul>
                                        <div id="comments_{{$reply->id}}">
                                        @foreach($reply->replycomment as $comment)
                                        <div class="media flex-column flex-md-row">
                                            <div class="mr-md-3 mb-2 mb-md-0">
                                                <a href="#"><img src="{{url('images/user.png')}}" class="rounded-circle" width="38" height="38" alt=""></a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-title">
                                                    <a href="#" class="font-weight-semibold">{{$comment->user_type}}</a>
                                                    <span class="text-muted ml-3">10 minutes ago</span>
                                                </div>

                                                <p>{{$comment->comment}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <hr class="m-0">

                        <div class="card-body">
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Add your comment..."></textarea>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn bg-blue"><i class="icon-plus22 mr-1"></i> Add Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
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
