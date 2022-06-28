@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @foreach ($services as $service)
            <div class="card">
                <div class="card-body">
                    <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-6 pr-5">
                            <div class="post-image">
                                <div style="position: relative; z-index: 2">
                                <img src="{{asset("storage/about-services/$service->image")}}"
                                        class="img1 to-left-border img-fluid w3-round-xxlarge  d-inline-block tarek-service-img"
                                        alt="">


                                    <div class="w3-round-xxlarge tarek-about-border-2" style="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-left pl-5">
                            <div class="post-content tarek-border-m">
                                <p class="head-content-latter pt-4"> {{$service->title}}</p>
                                <hr class="blackhr">


                                <p class="card2 pt-3">{!!$service->content!!}

                                </p>
                            </div>
                            <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-service-content/{{$service->id}}">Edit</a>
                            <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-service-content/{{$service->id}}">Delete</a>
                        </div>
                    </div>

                </article>
                </div>
            </div>
            @endforeach
            <div class="card" style="text-align:center">
                <div class="card-body">
                    <a href="/admin/edit-about" class="btn btn-primary waves-effect waves-float waves-light">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection