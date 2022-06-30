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
                                    <h4 class="card-title">Update Download Our App Banner</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('edit-app-banner')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Banner Image</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/app-banner/$data->banner")}}" class="rounded img-fluid" alt="Download App Banner" />
                                                    </div>
                                                    <input type="file" value="{{$data->banner}}" id="image" class="form-control" name="file1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align:center">
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
