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
                <th>Title</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($companies as $company)
              <tr>
                <td>
                  <div class="avatar">
                    <img src="{{asset("storage/company-logos/$company->logo")}}" height="60px" width="60px" alt="{{$company->title}}">
                  </div>
                </td>
                <td>{{$company->title}}</td>
                <td>{!!$company->address!!} {!!$company->zip!!}, {{$company->country}}</td>
                <td>{{$company->mobile}}</td>
                <td>{{$company->email}}</td>
                <td>
                  <div class="row">
                    <div class="col-3">
                      <a href="/admin/company-detail/{{$company->id}}/{{$company->user}}" alt="More Info"><i class="fa-solid fa-circle-info"></i></a>
                    </div>
                    <div class="col-3">
                      <a href="#"><i class="fa-solid fa-file-invoice-dollar"></i></a>
                    </div>
                    <div class="col-3">
                      <a href="/admin/edit-company/{{$company->id}}"><i class="fa-solid fa-file-pen"></i></a>
                    </div>
                    <div class="col-3">
                      <a href="/admin/delete-company/{{$company->id}}"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </div>
                </td>
                <td>
                  <form class="" action="" method="post">
                    <button type="button" name="button">Activate</button>
                  </form>
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
