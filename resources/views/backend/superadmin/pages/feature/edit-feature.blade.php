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
                                <h4 class="card-title">Update Featured Content</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('edit-feature')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$feature->id}}">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Feature Title</label>
                                                <input type="text" id="" value="{{$feature->title}}" class="form-control" placeholder="{{$feature->title}}" name="title" />
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Feature Content</label>
                                                <textarea class="form-control" id="content" rows="5" placeholder="" value="{{$feature->content}}" name="content">{{$feature->content}}</textarea>
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