<div id="modal_theme_info_sample_{{$product->id}}" class="modal fade"  style="padding-right: 15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title"><i class="icon icon-database-insert"></i> {{$subcategory->name}} collection sample  </h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">

                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-float">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-list"></i></span>
                                                </span>
                                            <input type="text" hidden name="sub_category_id" value="{{$subcategory->id}}" class="form-control">
                                            <textarea disabled rows="8" type="text" name="collection" class="form-control" placeholder="Host IP|Login|Password;">
                                                {{ Str::limit($product->collection, 100) }}
                                               </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>

                            </div>

                    </div>
            </div>
        </div>
    </div>
</div>
