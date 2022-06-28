@extends('layouts.layout2')

@push('css')
<style>
    .blog-posts:not(.blog-posts-no-margins) article {
        border-bottom: 0px !important;
        margin-bottom: 50px;
        padding-bottom: 0px !important;
    }

    a.sticky {
        outline: none;
        text-decoration: none !important;
        color: black !important;
        font-weight: 600 !important;
        transition: .2s;
        border-bottom: 2px solid transparent;
    }

    a.sticky:hover {
        text-decoration: none !important;
        color: #fda300 !important;
        border-bottom: 2px solid #fda300;
        /* border-bottom-width: medium; */
        margin-bottom: 14px;
    }

    p.card2 {
        line-height: 2 !important;
        /* color: #000; */
    }

    .call-btn {
        height: 25px;
        width: 25px;
        border-radius: 50%;
        background-color: orange;
    }

    .tarek-about-border {
        height: 260px;
        width: 260px;
        background-color: #F6931D;
        position: absolute;
        left: -20px;
        top: -15px;
        z-index: -1;
    }

    .tarek-about-border-2 {
        height: 260px;
        width: 260px;
        background-color: #F6931D;
        position: absolute;
        right: 20px;
        top: -15px;
        z-index: -1;
    }

    .tarek-tarek {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0 auto !important;
        /* margin-right: -15px; */
        /* margin-left: -15px; */
        text-align: center;
    }


    .container2 {
        width: 1100px !important;
        margin: 0 auto;
    }

    @media only screen and (max-width: 1200px) {


        .tarek-about-border-2 {
            height: 260px;
            width: 260px;
            background-color: #F6931D;
            position: absolute;
            right: -5px;
            top: -15px;
            z-index: -1;
        }
    }

    @media only screen and (max-width: 992px) {


        .tarek-about-border-2 {
            height: 260px;
            width: 260px;
            background-color: #F6931D;
            position: absolute;
            right: -80px;
            top: -15px;
            z-index: -1;
        }

        .tarek-border-m {
            margin-left: 30px !important;
        }
    }


    @media only screen and (max-width: 768px) {


        .tarek-about-border-2 {
            height: 260px;
            width: 260px;
            background-color: #F6931D;
            position: absolute;
            right: 60px;
            top: -15px;
            z-index: -1;
        }
    }

    @media only screen and (max-width: 576px) {


        .tarek-about-border-2 {
            height: 260px;
            width: 260px;
            background-color: #F6931D;
            position: absolute;
            right: -30px;
            top: -15px;
            z-index: -1;
        }
    }
</style>
@endpush

@section('content')
<div class="main mb-5" role="main">


    <div role="main" class="main margin-start">
        <div class="sticky-active" id="st">

            <div class="row s" style="height: 60px">
                <div class="col-md-12 text-center my-3">
                    <a class="w3-text-black font-weight-bold pr-4 sticky"
                        style="font-size: 20; color:#fda300 !important; border-bottom: 2px solid #fda300;"
                        href="#our_story">Our
                        Story</a>
                    <a class="w3-text-black font-weight-bold pr-4 sticky" style="font-size: 20;" href="#our_mission">Our
                        Mission</a>
                    <a class="w3-text-black font-weight-bold pr-4 sticky" style="font-size: 20;" href="#our_service">Our
                        Servicess</a>

                    <a class="w3-text-black font-weight-bold pr-4 sticky" style="font-size: 20;" href="#our_value">Our
                        Values</a>

                    <a class="w3-text-black font-weight-bold sticky" style="font-size: 20;" href="#why_us">Why book with
                        us</a>

                </div>
            </div>

        </div>
    </div>

    <div id="our_story"></div>
    <div class="row" style="text-align:center">
        <div class="col">
            <div class="blog-posts">

                <article class="post post-large">
                    <div class="post-image">
                        <a href="blog-post.html">
                            <img src="{{asset("storage/banner/$data->image")}}"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </a>
                    </div>


                </article>

            </div>
        </div>

    </div>
    <div id="our_mission"></div>


    <div class="container pt-3 tarek-tarek">
        <div class="col-md-12 text-center">
            <p class="font-weight-bold text-black" style="font-size: 16px;"><span style="color: orange;">Our</span>
                Story
            </p>
            <p class="card2">{!!$data->story!!}</p>
        </div>

        <div class="col-md-12 text-center pt-5">
            <p class="text-black font-weight-bold" style="font-size: 16px;"><span style="color: orange;">Our</span>
                Mission
            </p>
            <p class="card2">{!!$data->mission!!}</p>
        </div>
        <div class="col-md-12 text-center pt-5">
            <p class="text-black font-weight-bold" style="font-size: 16px;"><span style="color: orange;">Our</span>
                Services
            </p>
            <div class="blog-posts">   
                @for ($i=0; $i<$count_services; $i++)
                @if ( $i & 1)
                <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-6 pr-5">
                            <div class="post-image">
                                <div style="position: relative; z-index: 2">
                                <img src="{{asset('storage/about-services/'.$services[$i]->image)}}"
                                        class="img1 to-left-border img-fluid w3-round-xxlarge  d-inline-block tarek-service-img"
                                        alt="">


                                    <div class="w3-round-xxlarge tarek-about-border-2" style="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-left pl-5">
                            <div class="post-content tarek-border-m">
                                <p class="head-content-latter pt-4"> {{$services[$i]->title}}</p>
                                <hr class="blackhr">


                                <p class="card2 pt-3">{!!$services[$i]->content!!}

                                </p>
                            </div>
                        </div>
                    </div>

                </article>
                @else
                <article class="post post-medium pt-5">
                    <div class="row mb-3">

                        <div class="col-lg-6 text-center">
                            <div class="post-content">
                                <p class="head-content-latter "> {{$services[$i]->title}}</p>
                                <hr class="blackhr">


                                <p class="card2 pt-3">{!!$services[$i]->content!!}
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 pl-5">
                            <div class="post-image">
                                <a href="blog-post.html">

                                    <div style="position: relative; z-index: 2">


                                        <div class="w3-round-xxlarge" style="background-color: #0D4699; border: 0">
                                            <img src="{{asset('storage/about-services/' . $services[$i]->image)}}"
                                                class="img1 to-left-border img-fluid w3-round-xxlarge  d-inline-block tarek-service-img"
                                                alt="">
                                        </div>

                                        <div class="w3-round-xxlarge tarek-about-border" style="">

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                @endfor
            </div>
        </div>




        <div class="col-md-12 text-center" id="why_us">
            <p class="card2 font-weight-bold" style="font-size: 18px;"><span style="color: orange;">Our</span>
                Values
            </p>
            <p class="card2">{!!$data->values!!}</p>
        </div>

    </div>



    <div class="col-md-12 text-center  pt-5">
        <p class="card2 font-weight-bold" style="font-size: 18px;"> Why book <span style="color: orange;">with
                us</span></p>

    </div>

</div>

<div style="max-width: 100%; background-color: #f0eef7 ;">
    <section class="container pt-5 pb-4  " style="background-color: #f0eef7;">
        <div class="row d-flex justify-content-center">
            @foreach($whys as $why)
            <div class="col-md-6 col-lg-4 appear-animation pt-4  " data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="600">

                <div class="mr-3 ml-3">
                    <div class="card border-0 bg-color-white pr-2 pl-3 border-curve2">
                        <div class="card-body">
                            <img class="img-fluid feature-image" src="{{asset("storage/about-services/$why->image")}}" alt="">
                            <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold w3-text-black pb-3">{{$why->title}}
                            </h4>
                            <p class="card2">{!!$why->content!!} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>


</div>
@endsection