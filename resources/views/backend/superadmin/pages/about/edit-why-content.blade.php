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
                                    <h4 class="card-title">Update "Why Us" Contents in About Page</h4>
                                </div>
                                <div class="card-body">
                                    
                                    <form class="form" action="{{route('edit-why-content')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$why->id}}">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Content Image</label>
                                                    <div class="profile-img">
                                                        <img src="{{asset("storage/about-services/$why->image")}}" class="rounded img-fluid" alt="Card image" />
                                                    </div>
                                                    <input type="file" value="{{$why->image}}" id="image" class="form-control" name="file1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Content Title</label>
                                                    <input type="text" id="" value="{{$why->title}}" class="form-control" placeholder="{{$why->title}}" name="title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Content</label>
                                                    <textarea class="form-control" value="{{$why->content}}" id="content" rows="5" placeholder="" name="content">{{$why->content}}</textarea>
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