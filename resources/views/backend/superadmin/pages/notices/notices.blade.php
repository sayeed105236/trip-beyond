@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @foreach ($notices as $notice)
            <div class="card">
                <div class="card-body">
                    <h2>{{$notice->title}}</h2>
                    <p>{!!$notice->notice!!}</p>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-notice/{{$notice->id}}">Edit</a>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-notice/{{$notice->id}}">Delete</a>
                </div>
            </div>
            @endforeach
            <div class="card" style="text-align:center">
                <div class="card-body">
                    <a href="/admin/new-notice" class="btn btn-primary waves-effect waves-float waves-light">New Notice</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection