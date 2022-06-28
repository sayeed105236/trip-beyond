@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @foreach ($features as $feature)
            <div class="card">
                <div class="card-body">
                    <h2>{{$feature->title}}</h2>
                    <p>{!!$feature->content!!}</p>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-feature/{{$feature->id}}">Edit</a>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-feature/{{$feature->id}}">Delete</a>
                </div>
            </div>
            @endforeach
            <div class="card" style="text-align:center">
                <div class="card-body">
                    <a href="/admin/new-feature" class="btn btn-primary waves-effect waves-float waves-light">New Content</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection