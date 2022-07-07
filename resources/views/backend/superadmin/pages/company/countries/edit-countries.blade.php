@extends('backend.superadmin.layouts.master')
@section('superadmin_content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Country</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('edit-country')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$country->id}}">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Country Name</label>
                                                <input type="text" id="" value="{{$country->country}}" class="form-control" placeholder="{{$country->country}}" name="country" />
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Phone Code</label>
                                                <input type="text" id="" value="{{$country->phone_code}}" class="form-control" placeholder="{{$country->phone_code}}" name="phone_code" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Currency</label>
                                                <input type="text" id="" value="{{$country->currency}}" class="form-control" placeholder="{{$country->currency}}" name="currency" />
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="row" style="text-align:center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
