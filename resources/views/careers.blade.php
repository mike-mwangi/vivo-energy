@extends('layouts.master')

@section('content')
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Careers</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Careers</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Careers Area Start -->
        <div class="careers-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Our Careers</h2>
                            </div>
                            <div class="front-text">
                                <h5 class="">At Vivo Energy, we are committed to the continual development of our people. We understand that as a business we can only be as good as the individuals we employ, and for that reason we actively seek out people with the rare combination of skill, experience, responsibility, commitment and ambition that will help make Vivo Energy a respected and successful company and an employer of choice.</h5>
                            </div>
                            <span class="back-text">Careers</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/why_vivo_others2.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/why_vivo') }}">Why Vivo Energy</a></h4>
                                <a href="{{ url('/why_vivo') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/expect2.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/expect') }}">What to expect</a></h4>
                                <a href="{{ url('/expect') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/succeeds2.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/succeeds') }}">Who succeeds</a></h4>
                                <a href="{{ url('/succeeds') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/people2.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/people') }}">Our People</a></h4>
                                <a href="{{ url('/people') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/roles2.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/roles') }}">Roles</a></h4>
                                <a href="{{ url('/roles') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Student-and-Graduates.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/students') }}">Students and graduates</a></h4>
                                <a href="{{ url('/students') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/vacancies.png" alt="" width = 360px height = 224px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/vacancies') }}">Vacancies</a></h4>
                                <a href="{{ url('/vacancies') }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Careers Area End -->

@endsection