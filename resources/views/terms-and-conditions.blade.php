@extends('layouts.layout2')
@push('css')
<style>
    .container-career{
    width: 80% !important;
    margin: 0 auto !important;
}
.card2{
    text-align: justify !important;
}
li{
    color: black !important;
    line-height: 1.5;
    padding: 10px 0px;
    text-align: justify;
}
h5{
    padding: 30px 0px 10px 0px;
    font-weight: 500;
}
.page-header {
    background-color: #212529;
    margin: 0 0 25px 0;
    padding: 5px 0;
    position: relative;
    text-align: left;
}

</style>
@endpush
@section('content')
<section class="page-header page-header-modern page-header-background-sm overlay  overlay-show overlay-op-2 mb-5" style="background-color: orange;" >
    <div class="container" >
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1>Terms and Conditions (Trip Beyond)</h1>

            </div>

        </div>
    </div>
</section>


<div class="container-career py-2 my-5" >
    <div class="row">
      @for ($i=0; $i<$count_terms; $i++)
      @if ( $i & 1)
      <div class="col-lg-12">
          <div class="img-fluid appear-animation text-dark" data-appear-animation="bounceInRight" data-appear-animation-delay="0" data-appear-animation-duration="1s">
          <p class="font-weight-bold text-black" style="font-size: 16px;">{{$terms[$i]->title}} </p>
          <p class="card2">{!!$terms[$i]->term!!}
          </p>
          </div>
      </div>
      @else
      <div class="col-lg-12">
          <div class="img-fluid appear-animation text-dark" data-appear-animation="bounceInLeft" data-appear-animation-delay="0" data-appear-animation-duration="1s">
          <p class="font-weight-bold text-black" style="font-size: 16px;">{{$terms[$i]->title}} </p>
          <p class="card2">{!!$terms[$i]->term!!}
          </p>
          </div>
      </div>
      @endif
      @endfor
    </div>
</div>


@endsection
