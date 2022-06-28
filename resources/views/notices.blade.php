@extends('layouts.layout2')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @foreach ($notices as $notice)
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{$notice->title}}</h4>
                            <p>{!!$notice->notice!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection