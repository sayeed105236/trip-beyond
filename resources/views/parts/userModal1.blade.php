<div class="modal fade" id="companyModal" tabindex="-1" role="dialog" aria-labelledby="companyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center align-items-center mt-5 pt-5">
        <div class="modal-content btn-rounded p-4" style="max-width: 830px">
            <div class="modal-header pt-0" style="min-width: 830px; border:none">
                <h4 class="modal-title font-weight-bold" id="defaultModalLabel">{{ __('Company Registration') }}</h4>
            </div>
            <div class="modal-body pb-0">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form class="contact-form" action="{{ route('store-company') }}" method="POST">
                            @csrf
                            {{-- <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Registration Completed.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div> --}}
                            <input type="hidden" name="manager" value="{{Auth::user()->id}}">
                            <div class="row">
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Company Type</label>
                                    <select class="form-control btn-rounded" style="border: 1px solid black; height: 3.7em" name="type">
                                      <option value="">Select</option>
                                      @foreach($types as $type)
                                      <option value="{{$type->id}}">{{$type->type}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Company Name</label>
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="" data-msg-required="Please enter company name." class="form-control btn-rounded" name="name" placeholder="Company Name..."  required autocomplete="name" autofocus>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Address Line 1</label>
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="" data-msg-required="Please enter address." class="form-control btn-rounded" name="address_l1" placeholder="Company Address..."  required autocomplete="address_l1" autofocus>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Address Line 2</label>
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="" class="form-control btn-rounded" name="address_l2" placeholder="Company Address..."  autofocus>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">City</label>
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="" data-msg-required="Please enter city." class="form-control btn-rounded" name="city" placeholder="City..."  required autocomplete="city" autofocus>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Zip</label>
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="" data-msg-required="Please enter zip." class="form-control btn-rounded" name="zip" placeholder="Zip..."  required autocomplete="zip"  autofocus>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Country</label>
                                    <select class="form-control btn-rounded" style="border: 1px solid black; height: 3.7em" name="country">
                                      <option value="">Select</option>
                                      @foreach($countries as $country)
                                      <option value="{{$country->country}}">{{$country->country}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Email</label>
                                    <input type="email" style="border: 1px solid black; height: 3.7em" value="" data-msg-required="Please enter email." class="form-control btn-rounded" name="email" placeholder="Email..."  required autocomplete="email" autofocus>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Code</label>
                                    <select class="form-control btn-rounded" style="border: 1px solid black; height: 3.7em" name="phone_code">
                                      <option value="">Select</option>
                                      @foreach($countries as $country)
                                      <option value="{{$country->phone_code}}">{{$country->phone_code}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Phone Number</label>
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="" data-msg-required="Please enter phone number." class="form-control btn-rounded" name="phone" placeholder="Phone..."  required autocomplete="phone" autofocus>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-2 col-md-12"></div>
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Preferred Currency</label>
                                    <select class="form-control btn-rounded" style="border: 1px solid black; height: 3.7em" name="preferred_currency">
                                      <option value="">Select</option>
                                      @foreach($countries as $country)
                                      <option value="{{$country->currency}}">{{$country->currency}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-12">
                                <div class="form-row">
                                  <div class="form-group col">
                                    <label for="">Company Logo</label>
                                    <input type="file" style="border: 1px solid black; height: 3.7em" value="" class="form-control btn-rounded" name="logo" placeholder="Logo..." autofocus>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-12"></div>
                            </div>
                            <input type="hidden" name="status" value="Pending">
                            <input type="hidden" name="does_agree" value="1">
                            <p><b>By registering you are agreeing to all terms and conditions.</b></p>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-tarek btn-xl btn-block btn-rounded">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
