@extends('layouts.master')

@section('content')

<!-- slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h2>Community Investment</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- About Area Start -->
<section class="support-company-area fix pt-10 section-padding30">
    <div class="support-wrapper align-items-end">
        <div class="left-content">
            <!-- section tittle -->
            <div class="section-tittle section-tittle2 mb-55">
               
                <span class="back-text">Community</span>
            </div>
            <div class="support-caption">
                <p class="pera-top">At Vivo Energy, we want to make a real and lasting difference to the communities in which we operate. We have chosen to focus on three key areas of community investment.

Our community investment programmes matter to us because we employ local people and serve local businesses and individuals. We want to create lasting social and economic benefits for these communities and engage with them to earn their respect and trust.

The three themes of our community investment programme are road safety, education and the environment.</p>
                <a href="about.html" class="btn red-btn2">read more</a>
            </div>
        </div>
        <div class="right-content">
            <!-- img -->
            <div class="right-img">
                <img src="assets/img/gallery/safe_in.png" alt="">
            </div>
        
        </div>
    </div>
</section>
<!-- About Area End -->
<!-- Testimonial End -->
<!-- Team Start -->
<div class="team-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle5 mb-50">
                   
                    <span class="back-text">Community</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single Tem -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                    <a href="{{ url('/education') }}"><img src="assets/img/team/education.jpg" alt="">
                    </div>
                    <div class="team-caption">
                        
                        <h3>Education</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                    <a href="{{ url('/road_safety') }}"> <img src="assets/img/team/road_safety.jpg" alt="">
                    </div>
                    <div class="team-caption">
                        
                        <h3>Road saftey </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                    <a href="{{ url('/enviroment') }}">  <img src="assets/img/team/enviroment.jpeg" alt="">
                    </div>
                    <div class="team-caption">
                     
                        <h3>Enviroment</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection