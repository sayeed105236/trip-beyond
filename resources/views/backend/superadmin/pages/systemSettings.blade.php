@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
  @include('sweetalert::alert')
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
                                    <h4 class="card-title">Update System Information</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" action="{{route('update-system-settings')}}" enctype="multipart/form-data">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$settings->id}}">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Website Title</label>
                                                    <input type="text" id="" class="form-control" placeholder="Enter Title Here" value="{{$settings->website_title}}" name="website_title" />
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Slogan</label>
                                                    <input type="text" id="" class="form-control" value="{{$settings->slogan}}" name="slogan" placeholder="Enter Slogan Here" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Google Analytics (Tracking) Code</label>
                                                    <textarea class="form-control" name="google_analytics" value="{{$settings->google_analytics}}" id="" rows="5" placeholder="">{{$settings->google_analytics}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Facebook (Pixel) Code</label>
                                                    <textarea name="facebook_pixel" value="{{$settings->facebook_pixel}}" class="form-control" id="" rows="5" placeholder="Facebook (Pixel) Code">{{$settings->facebook_pixel}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Code for Google Map</label>
                                                    <textarea class="form-control" name="google_map" value="{{$settings->google_map}}" id="" rows="5" placeholder="Code for Google Map">{{$settings->google_map}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Meta Author for Website</label>
                                                    <textarea class="form-control" name="meta_author" value="{{$settings->meta_author}}" id="" rows="5" placeholder="Code for Google Map">{{$settings->meta_author}}</textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Meta Description</label>
                                                    <textarea class="form-control" name="meta_description" value="{{$settings->meta_description}}" id="" rows="3" placeholder="Meta Description">{{$settings->meta_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Meta Keyword</label>
                                                    <textarea name="meta_keywords" value="{{$settings->meta_keywords}}" class="form-control" id="" rows="3" placeholder="Meta Keyword">{{$settings->meta_keywords}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Footer Copyright Text</label>
                                                    <textarea name="footer_copyright" value="{{$settings->footer_copyright}}" class="form-control" id="" rows="3" placeholder="Footer Copyright Text">{{$settings->footer_copyright}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Facebook Page Url</label>
                                                    <input type="text" name="facebook_url" value="{{$settings->facebook_url}}" id="" class="form-control" placeholder="Facebook Page Url" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Youtube Url</label>
                                                    <input type="text" id="" name="youtube_url" value="{{$settings->youtube_url}}" class="form-control"  placeholder="Youtube Url" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Instagram Url</label>
                                                    <input type="text" id="" name="instagram_url" value="{{$settings->instagram_url}}" class="form-control" placeholder="Instagram Url" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Contact Mobile</label>
                                                    <input type="text" id=""  name="mobile" value="{{$settings->mobile}}" class="form-control"  placeholder="Contact Mobile" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">LinkedIn Url</label>
                                                    <input type="text" id="" name="linkedin_url" value="{{$settings->linkedin_url}}" class="form-control"  placeholder="LinkedIn Url" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Twitter Url</label>
                                                    <input type="text" id="" name="twitter_url" value="{{$settings->twitter_url}}" class="form-control" placeholder="Twitter Url" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Contact email</label>
                                                    <input type="email" id="" name="contact_email" value="{{$settings->contact_email}}" class="form-control"  placeholder="Contact email" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Frontend Logo (188*50 px)</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/settings/$settings->frontend_logo")}}" class="rounded img-fluid" alt="Card image" />
                                                    </div>

                                                    <input type="file" value="{{$settings->frontend_logo}}"  id="frontend_logo" name="file1"  class="form-control"  />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Backend Logo (120*23 px)</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/settings/$settings->backend_logo")}}" class="rounded img-fluid" alt="Card image" />
                                                    </div>

                                                    <input type="file" value="{{$settings->backend_logo}}" id="backend_logo" name="file2" class="form-control"  />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Alt Logo</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/settings/$settings->alt_logo")}}" class="rounded img-fluid" alt="Card image" />
                                                    </div>

                                                    <input type="file" value="{{$settings->alt_logo}}" id="alt_logo" name="file3" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Favicon (65*65 px)</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/settings/$settings->favicon")}}" class="rounded img-fluid" alt="Card image" />
                                                    </div>

                                                    <input type="file" value="{{$settings->favicon}}" id="favicon" name="file4" class="form-control"  />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Home Page Banner (1920*1200 px)</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/settings/$settings->banner")}}" width="40%" class="rounded img-fluid" alt="Card image" />
                                                    </div>

                                                    <input type="file" value="{{$settings->banner}}" id="banner" name="file5" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Update</button>

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
