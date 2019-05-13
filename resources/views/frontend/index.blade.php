@extends('layouts.user')

@section('title') Home @endsection
@section('content')

<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-6">
                <h1>
                    Improved <br>
                    Production level <br>
                    with Robotics
                </h1>
                <p class="text-white text-uppercase">
                    Everyone wants the innovation through robotics
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">View Details</a>
            </div>
            <div class="banner-img col-lg-6 col-md-6">
                <img class="img-fluid" src="{{ asset('frontend/img/banner-img.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start products Area -->
<section class="products-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Featured Robotics Products to Show</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="{{ asset('frontend/img/p1.png')}}" alt="">
                    </div>
                    <div class="details">
                        <h4>The Upper Eye</h4>
                        <p>
                            Who are in extremely love with eco friendly system.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="{{ asset('frontend/img/p2.png')}}" alt="">
                    </div>
                    <div class="details">
                        <h4>The Crab Wheel</h4>
                        <p>
                            Who are in extremely love with eco friendly system.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="{{ asset('frontend/img/p3.png')}}" alt="">
                    </div>
                    <div class="details">
                        <h4>The Plug Ninja</h4>
                        <p>
                            Who are in extremely love with eco friendly system.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="{{ asset('frontend/img/p4.png')}}" alt="">
                    </div>
                    <div class="details">
                        <h4>The Controller</h4>
                        <p>
                            Who are in extremely love with eco friendly system.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End products Area -->

<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('frontend/img/about-img.png')}}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Globally Connected <br>
                by Large Network</h1>
                <h5>
                    We are here to listen from you deliver exellence
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
                <a class="primary-btn text-uppercase" href="#">Get Details</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start about-video Area -->
<section class="about-video-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-video-left">
                <h6 class="text-uppercase">Brand new app to blow your mind</h6>
                <h1>
                    We’ve made a life <br>
                    that will change you
                </h1>
                <p>
                    <span>We are here to listen from you deliver exellence</span>
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a class="primary-btn" href="#">Get Started Now</a>
            </div>
            <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{ asset('frontend/img/play-btn.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- End about-video Area -->


<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Some Features that Made us Unique</h1>
                <p class="text-white">
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-user"></span>
                        <h4>Expert Technicians</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-license"></span>
                        <h4>Professional Service</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-phone"></span>
                        <h4>Great Support</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Technical Skills</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-diamond"></span>
                        <h4>Highly Recomended</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-bubble"></span>
                        <h4>Positive Reviews</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End feature Area -->


<!-- Start brand Area -->
<section class="brand-area pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l1.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l2.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l3.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l4.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l5.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End brand Area -->


<!-- Start blog Area -->
<section class="blog-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Latest News from our Blog</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            @php $arr = array('left', 'right'); @endphp
            @foreach($artikel as $blog)
            @php $loop = 0;
              $loop++;@endphp
                <div class="col-lg-6 col-md-6 blog-{{$arr[$loop]}}">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$blog->foto)}}" alt="" style="height: 311.35px; width: 540px;">
                    </div>
                    <div class="detais">
                        <ul class="tags">
                            @foreach($blog->tag as $tag)
                                <li><a href="/blog/tag/{{ $tag->slug }}">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                        <a href="{{ route('detail.blog', $blog->slug) }}"><h4>{{ $blog->judul }}</h4></a>
                        <p>
                            {!! substr($blog->konten, 0, 120) !!}
                        </p>
                        <p class="date">{{ date('d F Y' ,strtotime($blog->created_at)) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End blog Area -->

@endsection

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/hexagons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
@endsection

{{-- JS --}}
@section('js')
    <script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js')}} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js')}} "></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('frontend/js/easing.min.js')}} "></script>
    <script src="{{ asset('frontend/js/hoverIntent.js')}} "></script>
    <script src="{{ asset('frontend/js/superfish.min.js')}} "></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}} "></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}} "></script>
    <script src="{{ asset('frontend/js/hexagons.min.js')}} "></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}} "></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}} "></script>
    <script src="{{ asset('frontend/js/waypoints.min.js')}} "></script>
    <script src="{{ asset('frontend/js/mail-script.js')}} "></script>
    <script src="{{ asset('frontend/js/main.js')}} "></script>
@endsection
