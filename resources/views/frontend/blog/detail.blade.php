@extends('layouts.user')

@section('title') All Blog @endsection

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                    {{ $artikel->judul }}

                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('all.blog') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Blog Single</a></p>
                </div>
            </div>
        </div>                                                                                                                
    </section>
    <!-- End banner Area -->

    <!-- Start blog-posts Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" alt="" style="height: 312.667px; width:  640px;">
                        <ul class="tags">
                            @foreach($artikel->tag as $tag)
                                <li><a href="#">{{ $tag->name }}, </a></li>
                            @endforeach
                        </ul>
                        <a href="{{ route('detail.blog', $artikel->slug) }}">
                            <h1>
                                {{ $artikel->judul }}
                            </h1>
                        </a>
                            <p>
                                    {!! $artikel->konten !!}
                            </p>
                        <div class="bottom-meta">
                            <div class="user-details row align-items-center">
                                <div class="comment-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="social-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </section>
<!-- End blog-posts Area -->
@endsections
 