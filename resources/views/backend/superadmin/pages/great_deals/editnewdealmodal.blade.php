<div class="modal fade text-left" id="large{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Edit Deal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

              <form class="form" action="{{route('update-great-deals')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$row->id}}">
                  <div class="row">
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="first-name-column">Deals Title</label>
                              <input type="text" value="{{$row->title}}" id="first-name-column" class="form-control" placeholder="Enter Title" name="title" />
                          </div>
                      </div>

                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="city-column">Short Description</label>
                              <input type="text" value="{{$row->description}}" id="city-column" class="form-control" placeholder="Enter Short Description" name="description" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="country-floating">Button Title</label>
                              <input type="text" value="{{$row->button_title}}" id="country-floating" class="form-control" name="button_title" placeholder="Enter Button Title" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="company-column">Button Link</label>
                              <input type="text" value="{{$row->button_link}}" id="company-column" class="form-control" name="button_link" placeholder="Enter Button Link" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="last-name-column">Deals Image</label>
                              <input type="file" value="{{$row->image}}"  id="image" class="form-control" placeholder="Insert Image" name="file2" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                    <label>Status</label>
                    <div class="form-group">
                        <select class="select2 form-control" name="status"  id="default-select-multi">
                          @if($row->status== 1)
                          <option selected>Active</option>


                            <option value="0">Inactive</option>
                            @else
                              <option selected>Inactive</option>
                                <option value="1">Active</option>
                                @endif

                        </select>
                    </div>
                    </div>

                  </div>



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" >Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                  Cancel
                </button>
            </div>
              </form>
        </div>
    </div>
</div>
