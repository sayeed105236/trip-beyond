@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
  @include('sweetalert::alert')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
          <div class="content-header-left col-md-9 col-12 mb-2">
              <div class="row breadcrumbs-top">
                  <div class="col-12">
                      <h2 class="content-header-title float-left mb-0">Great Deals</h2>
                      <div class="breadcrumb-wrapper">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('super.admin.home')}}">Dashboard</a>
                              </li>
                              <li class="breadcrumb-item active">great deals
                              </li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
            <div class="content-header row"></div>
            <div class="content-body">

                <!-- Basic multiple Column Form section start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#large">Add New Deal</button>
                                @include('backend.superadmin.pages.great_deals.addnewdealmodal')
                            </div>
                            <div class="card-body">

                            </div>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Short Description</th>
                                            <th>Button Title</th>
                                            <th>Button Link</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($deals as $row)
                                        <tr>
                                            <td>

                                                <span class="font-weight-bold">{{$loop->index+1}}</span>
                                            </td>
                                            <td>{{$row->title}}</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{$row->title}}">
                                                        <img src="{{asset("storage/deals/$row->image")}}" alt="Avatar" height="50" width="50" />
                                                    </div>

                                                </div>
                                            </td>
                                            <td>{{$row->description}}</td>
                                            <td>{{$row->button_title}}</td>
                                            <td>{{$row->button_link}}</td>
                                            <td>
                                              @if($row->status == 1)

                                              <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                              @else
                                                <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>

                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="" data-toggle="modal" data-target="#large{{$row->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="/super-admin/great-deals/delete/{{$row->id}}" class=""><i class="fa-solid fa-trash"></i></a>
                                                  @include('backend.superadmin.pages.great_deals.editnewdealmodal')
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Floating Label Form section end -->
            </div>
        </div>
    </div>
@endsection
