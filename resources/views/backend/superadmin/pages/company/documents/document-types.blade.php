@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @foreach ($types as $type)
            <div class="card">
                <div class="card-body">
                    <h2>{{$type->type}}</h2>
                    <p>{!!$type->detail!!}</p>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-company-document-type/{{$type->id}}">Edit</a>
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-company-document-type/{{$type->id}}">Delete</a>
                </div>
            </div>
            @endforeach
            <div class="card" style="text-align:center">
                <div class="card-body">
                    <a href="/admin/new-company-document-type" class="btn btn-primary waves-effect waves-float waves-light">New Type</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
