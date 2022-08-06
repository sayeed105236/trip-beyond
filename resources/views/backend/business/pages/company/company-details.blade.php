@extends('backend.business.layouts.master')
@section('business_content')
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
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
              @foreach($types as $type)
              @if($type->id==$company->type)
              <p><b>Company Type:</b> {{$type->type}}<br></p>
              @endif
              @endforeach
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
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Documents</h3>
                </div>
                <div class="card-body">
                  <div class="d-inline-block">
                      @foreach($documents as $document)
                      @foreach($doctypes as $doctype)
                      @if($doctype->id==$document->type)
                      <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#info">{{$doctype->type}}</button>
                      @endif
                      @endforeach
                      @include('backend.business.pages.company.companyModal')
                      @endforeach
                  </div>
                </div>
              </div>
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Add New Document</h3>
                  </div>
                  <div class="card-body">
                      <form class="form" action="{{route('new.company.document')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                              <!-- <div class="col-3"></div> -->
                              <div class="col-6">
                                <input type="hidden" name="company" value="{{$company->id}}">
                                  <div class="form-group">
                                      <label for="">Document Type</label>
                                      <select class="form-control" style="border: 1px solid black; height: 3.7em" name="type">
                                        <option value="">Select</option>
                                        @foreach($doctypes as $doctype)
                                        <option value="{{$doctype->id}}">{{$doctype->type}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                              </div>
                              <!-- <div class="col-3"></div> -->
                          </div>
                          <div class="row">
                              <!-- <div class="col-3"></div> -->
                              <div class="col-6">
                                  <div class="form-group">
                                      <label for="">Upload Document</label>
                                      <input class="form-control" style="border: 1px solid black; height: 3.7em" type="file" name="document" value="">
                                  </div>
                              </div>
                              <input type="hidden" name="is_verified" value="0">
                              <!-- <div class="col-3"></div> -->
                          </div>
                          <div class="row" style="text-align:center">
                              <div class="col-6">
                                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
