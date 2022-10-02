@extends('layouts.master_home')
@section('title', 'About us')
@section('home_content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About us</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

 <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h1>{{$messages->title}}</h1>
            <h3>{{$messages->short_dis}}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            {{$messages->long_dis}}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>  {{$messages->li1}}</li>
              <li><i class="ri-check-double-line"></i>  {{$messages->li2}}</li>
              <li><i class="ri-check-double-line"></i>  {{$messages->li3}}</li>
            </ul>
            <p class="font-italic">
             Safari has innovative features that let you enjoy more of the web. In even more ways. Built-in privacy features help protect your information and keep your Mac secure. <br/>
            <strong> Note:<span  class="text-danger">This is demo site for testing by admin panel you can manage and insert everything on every page.</span></strong>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



<!-- Team section  -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team Message</strong></h2>
          <p>Check out Today at Apple at Home. Quick and fun projects led by Creative Pros from the Apple Store. Put together in their homes, so you can get creative in yours..</p>
        </div>

        <div class="row">
@foreach($about_us as $add_detail)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{asset($add_detail->image)}}" class="img-fluid" alt="image">

                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4> {{ $add_detail->name}}</h4>
                <span>{{ $add_detail->designation}} </span>
              </div>
            </div>
          </div>

     @endforeach  

        </div>

      </div>
    </section>


    <!-- end Team section   -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
        @foreach($brands as $brand) 
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="  {{ asset($brand->brand_image) }}" class="img-fluid" alt="image of brand 1" style="width:auto; height:100px;">
            </div>
          </div>
    @endforeach
        </div>
      </div>
    </section>
    <!-- End Our Clients Section -->
@endsection