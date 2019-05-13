@extends('layouts.user')

@section('title') Home @endsection
@section('content')

<!-- start banner Area -->

        <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Semua tentang Motogp</h2>
            </div>

          </div>
        </div>
      </div>
    </section>
    <center>

<!-- End banner Area -->

<!-- Start products Area -->
<br>
<br>
<br>

<section>
<div class="row">
 @foreach($artikel as $a)
                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/assets/img/artikel/'.$a->foto)}}"  style="height: 300px; width:  400px;">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                
                            </div>
                            <a class="d-block" href="single-blog.html">
                            <a  href="{{ route('detail.blog', $a->slug) }}" class="primary-btn text-uppercase"> <h4>{{ $a->judul }}</h4></a>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>
                        </div>
                    </div> 

                </div>
 @endforeach 
           

<!-- End products Area -->
@endsection

 </div>
         
