<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Add New Deal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              <form class="form" action="{{route('store-great-deals')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="first-name-column">Deals Title</label>
                              <input required type="text" id="first-name-column" class="form-control" placeholder="Enter Title" name="title" />
                          </div>
                      </div>

                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="city-column">Short Description</label>
                              <input required type="text" id="city-column" class="form-control" placeholder="Enter Short Description" name="description" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="country-floating">Button Title</label>
                              <input required type="text" id="country-floating" class="form-control" name="button_title" placeholder="Enter Button Title" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="company-column">Button Link</label>
                              <input type="text" id="company-column" class="form-control" name="button_link" placeholder="Enter Button Link" />
                          </div>
                      </div>
                      <div class="col-md-6 col-12">
                          <div class="form-group">
                              <label for="last-name-column">Deals Image</label>
                              <input required type="file"  id="image" class="form-control" placeholder="Insert Image" name="file" />
                          </div>
                      </div>
                        <div class="col-md-6 col-12">
                      <label>Status</label>
                      <div class="form-group">
                          <select class="select2 form-control" name="status"  id="default-select-multi">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>

                          </select>
                      </div>
                      </div>

                  </div>



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" >Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                  Cancel
                </button>
            </div>
              </form>
        </div>
    </div>
</div>
