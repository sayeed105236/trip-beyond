@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <div style="max-width: 100%;">
            <section class="container pt-5 pb-4  ">
            <div class="row d-flex justify-content-center">
                @foreach($whys as $why)
                <div class="col-md-6 col-lg-4 appear-animation pt-4  " data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="600">
                <div class="mr-3 ml-3">
                    <div class="card border-0 bg-color-white pr-2 pl-3 border-curve2">
                        <div class="card-body">
                            <img class="img-fluid feature-image" src="{{asset("storage/about-services/$why->image")}}" alt="">
                            <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold w3-text-black pb-3">{{$why->title}}
                            </h4>
                            <p class="card2">{!!$why->content!!} </p>
                            <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-why-content/{{$why->id}}">Edit</a>
                            <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-why-content/{{$why->id}}">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach    
        </div>
    </section>
    <div class="card" style="text-align:center">
                <div class="card-body">
                    <a href="/admin/edit-about" class="btn btn-primary waves-effect waves-float waves-light">Go Back</a>
                </div>
            </div>
</div>
        </div>
    </div>
</div>
@endsection
