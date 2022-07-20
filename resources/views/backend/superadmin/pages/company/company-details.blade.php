@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div style="text-align:left">
                <a href="{{route('companies')}}" class="btn btn-primary waves-effect waves-float waves-light">Go Back</a>
              </div>
            </div>
            <div class="col-6">
              <div style="text-align:right">
                <a href="{{route('new-company')}}" class="btn btn-primary waves-effect waves-float waves-light">Add New Company</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h1>Company Details</h1>
        </div>
        <hr>
        <div class="card-body">
          <div class="row">
            <div class="col-4">
              @if($company->logo != null)
              <div class="avatar">
                <img src="{{asset("storage/company-logos/$company->logo")}}" height="150px" width="150px" alt="{{$company->name}}">
              </div>
              @endif
            </div>
            <div class="col-8">
              <h1>{{$company->name}}</h1>
            </div>
          </div>
          <br><hr><br>
          <div class="row">
            <div class="col-6">
              <h3>Company Information</h3>
              <p><b>Company Type:</b> {{$type->type}}<br></p>
              <p><b>Address:</b> {{$company->address_l1}}{{$company->address_l2}}, {{$company->city}}-{{$company->zip}}, {{$company->country}}</p>
              <p><b>Email:</b> {{$company->email}}</p>
              <p><b>Mobile:</b> {{$company->phone_code}}{{$company->phone}}</p>
              <p><b>Preferred Currency:</b> {{$company->preferred_currency}}</p>
              <p><b>Status:</b> {{$company->status}}</p>
              <br><hr><br>
              <h3>Manager Information</h3>
              <p><b>Name: {{$user->title}} {{$user->name}} {{$user->last_name}}</b></p>
              <p><b>Email:</b> {{$user->email}}</p>
              <p><b>Phone:</b> {{$user->phone}}</p>
            </div>
            <div class="col-6">
              <div class="d-inline-block">
                  @foreach($documents as $document)
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#info">{{$document->type}}</button>
                  <!-- Modal -->
                  @include('backend.superadmin.pages.company.companyModal')
                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
