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
                                <h4 class="card-title">Add New Country</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('store-new-country')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Country Name</label>
                                                <input type="text" id="" class="form-control" placeholder="Enter Country Name Here" name="country" />
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Phone Code</label>
                                                <input type="text" id="" class="form-control" placeholder="Enter Country Code Here" name="phone_code" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Currency</label>
                                                <input type="text" id="" class="form-control" placeholder="Enter Country Currency Here" name="currency" />
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
