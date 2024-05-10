@extends('layouts.app')

@section('title')
    Sarauke
@endsection

@section('content')
    <!-- Header -->
    <style>
        .slide-carousel.owl-carousel .owl-nav .owl-prev,
        .slide-carousel.owl-carousel .owl-nav .owl-next {
            position: absolute;
            text-align: center;
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 45px;
            font-size: 18px;
            color: #fff;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
        }

        .slide-carousel.owl-carousel .owl-nav .owl-prev {
            top: 47%;
            left: 0;
            margin-left: 40px;
        }

        .slide-carousel.owl-carousel .owl-nav .owl-next {
            top: 47%;
            right: 0;
            margin-right: 40px
        }

        .slide-carousel.owl-carousel .owl-nav .owl-prev:hover,
        .slide-carousel.owl-carousel .owl-nav .owl-next:hover {
            color: #e75542;
            border: 2px solid #e75542;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #000;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
        }

        .owl-nav button.owl-prev {
            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #ccc;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #000;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.38) !important;
        }

        span {
            font-size: 70px;
            position: relative;
            top: -5px;
        }

        .owl-nav button:focus {
            outline: none;
        }
    </style>
    {{-- <header class="text-center"> --}}
    <div class="text-center owl-carousel owl-theme owl-img-responsive header owl-theme owl-loade">
        
    </div>
    {{-- <h1>
    Explore The Beautiful World
    <br />
    As Easy One Click
  </h1>
  <p class="mt-3">
    You will see beautiful
    <br />
    moment you never see before
  </p>
  <a href="#popular" class="btn btn-get-started px-4 mt-4">
    Get started
  </a> --}}
    {{-- </header> --}}

    <main id="paket">
        {{-- <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
      <div class="col-3 col-md-2 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>3K</h2>
        <p>Hotel</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>72</h2>
        <p>Partners</p>
      </div>
    </section>
  </div> --}}

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try!
                            <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br />
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testiominal-content">
                                <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Nasrul Kurniawan</h3>
                                <p class="testimonial">
                                    “ It was glorious and I could not stop to say wohooo for
                                    every single moment Dankeeeeee “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testiominal-content">
                                <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Fahmi N</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and I saw something beautiful in that
                                    Island that makes me want to learn more “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testiominal-content">
                                <img src="frontend/images/testimonial-3.png" alt="User" class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Kayla</h3>
                                <p class="testimonial">
                                    “ I loved it when the waves was shaking harder — I was
                                    scared too “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" data-toggle="modal" data-target="#needhelpModal"
                            class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
