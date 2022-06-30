@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @foreach ($terms as $term)
            <div class="card">
                <div class="card-body">
                    <h2>{{$term->title}}</h2>
                    <p>{!!$term->term!!}</p>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-terms/{{$term->id}}">Edit</a>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-term/{{$term->id}}">Delete</a>
                </div>
            </div>
            @endforeach
            <div class="card" style="text-align:center">
                <div class="card-body">
                    <a href="/admin/new-term" class="btn btn-primary waves-effect waves-float waves-light">New Term and Condition</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
