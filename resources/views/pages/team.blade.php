@extends('layouts.master_home')
@section('title', 'Team')
@section('home_content')

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team Message</strong></h2>
          <p>A warm welcome and lots of good wishes on becoming part of our growing team. Congratulations and on behalf of all the members.... <br> ਅਮਨ ਖਾਲਸਾ</p>
        </div>

        <div class="row">
@foreach(  $team_detail as $add_detail)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{asset($add_detail->image)}}" class="img-fluid" alt="image of my team">

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
    </section><!-- End Our Team Section -->

    
@endsection