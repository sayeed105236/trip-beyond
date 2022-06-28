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
                                    <h4 class="card-title">Update About Us Contents</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('edit-about-content')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Banner Image</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/banner/$data->image")}}" class="rounded img-fluid" alt="Card image" />
                                                    </div>
                                                    <input type="file" value="{{$data->image}}" id="image" class="form-control" name="file1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Our Story</label>
                                                    <textarea class="form-control" value="{{$data->story}}" id="content" rows="5" placeholder="Enter Our Story Here" name="story">{{$data->story}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Our Mission</label>
                                                    <textarea class="form-control" value="{{$data->mission}}" id="content1" rows="5" placeholder="Enter Our Mission Here" name="mission">{{$data->mission}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Our Values</label>
                                                    <textarea class="form-control" value="{{$data->values}}" id="content2" rows="5" placeholder="Enter Our Values Here" name="values">{{$data->values}}</textarea>
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
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update About Us - Services</h4>
                                    <a class="btn btn-primary mr-1" href="/admin/view-service-content">View All</a>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('store-about-service')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Service Image</label>
                                                    <input type="file" id="image" class="form-control" name="image" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Service Title</label>
                                                    <input type="text" id="" class="form-control" placeholder="Enter Service Title Here" name="title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Service Content</label>
                                                    <textarea class="form-control" id="content" rows="5" placeholder="Enter Service Content Here" name="content"></textarea>
                                                </div>
                                            </div>
                                        </div>
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
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update About Us - Why Booking Through Us</h4>
                                    <a class="btn btn-primary mr-1" href="/admin/view-why-content">View All</a>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('store-about-why')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Content Image</label>
                                                    <input type="file" id="" class="form-control" name="image" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Content Title</label>
                                                    <input type="text" id="" class="form-control" placeholder="Enter Content Title Here" name="title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Content</label>
                                                    <textarea class="form-control" id="content" rows="5" placeholder="Enter Content Here" name="content"></textarea>
                                                </div>
                                            </div>
                                        </div>
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