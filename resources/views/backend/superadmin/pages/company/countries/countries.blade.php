@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
          <div class="card" style="text-align:right">
            <div class="card-body">
              <a href="/admin/new-country" class="btn btn-primary waves-effect waves-float waves-light">Add New Country</a>
            </div>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr style="text-align:center">
                <th>Country</th>
                <th>Phone Code</th>
                <th>Currency</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($countries as $country)
              <tr>
                <td>{{$country->country}}</td>
                <td>{{$country->phone_code}}</td>
                <td>{{$country->currency}}</td>
                <td>
                  <div class="row">
                    <div class="col-6">
                      <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/edit-country/{{$country->id}}"><i class="fa-solid fa-file-pen"></i></a>
                    </div>
                    <div class="col-6">
                      <a class="btn btn-primary waves-effect waves-float waves-light" href="/admin/delete-country/{{$country->id}}"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
