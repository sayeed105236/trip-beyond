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
          <a href="{{route('new-company')}}" class="btn btn-primary waves-effect waves-float waves-light">Add New Company</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4>{{$status}} B2B Company List</h4>
          <table class="table table-bordered">
            <thead>
              <tr style="text-align:center">
                <th></th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($companies as $company)
              <tr>
                <td>
                  @if($company->logo != null)
                  <div class="avatar">
                    <img src="{{asset("storage/company-logos/$company->logo")}}" height="60px" width="60px" alt="{{$company->title}}">
                  </div>
                  @endif
                </td>
                <td>{{$company->name}}</td>
                <td>{{$company->address_l1}}{{$company->address_l2}}-{{$company->zip}}, {{$company->country}}</td>
                <td>{{$company->phone_code}}{{$company->phone}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->status}}</td>
                <td>
                  <!-- <select class="form-control" id="basicSelect">
                    <option value=""></option>
                    <option><a href="#"></a>Company Details</option>
                    <option><a href="#"></a>Transaction History</option>
                    <option><a href="/admin/edit-company/{{$company->id}}">Edit Company</a></option>
                    <option><a href="/admin/delete-company/{{$company->id}}">Delete Company</a></option>
                  </select> -->
                  <div class="row">
                    <div class="col-3">
                      <a href="/admin/company-detail/{{$company->id}}/{{$company->manager}}/{{$company->type}}" alt="More Info"><i class="fa-solid fa-circle-info"></i></a>
                    </div>
                    <!-- <div class="col-3">
                      <a href="#"><i class="fa-solid fa-file-invoice-dollar"></i></a>
                    </div>
                    <div class="col-3">
                      <a href="/admin/edit-company/{{$company->id}}"><i class="fa-solid fa-file-pen"></i></a>
                    </div>
                    <div class="col-3">
                      <a href="/admin/delete-company/{{$company->id}}"><i class="fa-solid fa-trash"></i></a>
                    </div> -->
                    <!-- <div class="col-9"> -->
                      @if($company->status=='Inactive')
                      <div class="col-9">
                        <a href="/admin/activate-company/{{$company->id}}"><i class="fa-solid fa-check"></i></a>
                      </div>
                      @elseif($company->status=='Pending')
                      <div class="col-4">
                        <a href="/admin/activate-company/{{$company->id}}"><i class="fa-solid fa-check"></i></a>
                      </div>
                      <!-- <div class="col-1"></div> -->
                      <div class="col-4">
                        <a href="/admin/deactivate-company/{{$company->id}}"><i class="fa-solid fa-xmark"></i></a>
                      </div>
                      @else
                      <div class="col-9">
                        <a href="/admin/deactivate-company/{{$company->id}}"><i class="fa-solid fa-xmark"></i></a>
                      </div>
                      @endif
                    <!-- </div> -->
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
