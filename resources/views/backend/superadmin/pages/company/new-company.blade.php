@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Store New Company</h4>
                                    <a class="btn btn-primary mr-1" href="{{route('companies')}}">Go Back</a>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('store-new-company')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <div class="form-group">
                                                    <label for="">Company Logo</label>
                                                    <input type="file" id="image" class="form-control" style="border: 1px solid black; height: 3.7em" name="logo" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                              <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="">Company Type</label>
                                                  <select class="form-control" style="border: 1px solid black; height: 3.7em" name="type">
                                                    <option value="">Select</option>
                                                    @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="form-group">
                                                    <label for="">Manager</label>
                                                    <select class="form-control" style="border: 1px solid black; height: 3.7em" name="manager">
                                                      <option value="">Select Manager</option>
                                                      @foreach($users as $user)

                                                      <option value="{{$user->id}}">{{$user->email}}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
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
                                                <select class="form-control" style="border: 1px solid black; height: 3.7em" name="country">
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
                                                <select class="form-control" style="border: 1px solid black; height: 3.7em" name="phone_code">
                                                  <option value="">Code</option>
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
                                                <select class="form-control" style="border: 1px solid black; height: 3.7em" name="preferred_currency">
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
                                                <label for="">Status</label>
                                                <select class="form-control" style="border: 1px solid black; height: 3.7em" name="status">
                                                  <option value="">Select Status</option>
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                                  <option value="Pending">Pending</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-2 col-md-12"></div>
                                        </div>
                                        <input type="hidden" name="does_agree" value="1">
                                        <div class="row" style="text-align:center">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->
            </div>
        </div>
    </div>
@endsection
