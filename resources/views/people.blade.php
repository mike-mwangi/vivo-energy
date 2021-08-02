@extends('layouts.master')

@section('content')
<div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-cap hero-cap2 pt-120">
                                <h2>Our People</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Services Details End -->
        <div class="careers-area1 section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="assets/img/service/peopless.png" alt="" width = 690px height = 360px>
                            </div>
                            <div class="col-lg-12">
                                <div class="section-tittle mb-55">
                                    <div class="front-text">
                                        <h5 class="">Helping us create Africa’s most respected energy business, are a team of people with the rare combination of skill, experience, responsibility, commitment and ambition. Click on the images below to meet some of the dynamic people who contribute to the ongoing success of Vivo Energy.</h5>
                                     </div>
                                    <span class="back-text">Careers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Our People</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Ann.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/ann') }}">Ann Gitao</a></h4>
                                <a href="{{ url('/ann') }}" class="more-btn">Africa Head of Marketing <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Edward.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/edward') }}">Edward Walugembe</a></h4>
                                <a href="{{ url('/edward') }}" class="more-btn">Retail and Lubricants Manager, Uganda <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/people2.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/hind') }}">Hind Ameziane</a></h4>
                                <a href="{{ url('/hind') }}" class="more-btn">HR Director, Morocco <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Khadidiatou.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/khadidiatou') }}">Khadidiatou Fall</a></h4>
                                <a href="{{ url('/khadidiatou') }}" class="more-btn">Commercial Manager, Senegal <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Kennedy.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/kennedy') }}">Kennedy Bwambok</a></h4>
                                <a href="{{ url('/kennedy') }}" class="more-btn">Management Information & Planning Analyst, Kenya <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Lena.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/lena') }}">Lena Munuve</a></h4>
                                <a href="{{ url('/lena') }}" class="more-btn">Retail Manager, Kenya <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Patrick.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/patrick') }}">Patrick Korankye</a></h4>
                                <a href="{{ url('/patrick') }}" class="more-btn">Retail Projects Engineer, Ghana <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Peter.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/peter') }}">Peter Murungi</a></h4>
                                <a href="{{ url('/peter') }}" class="more-btn">Supply and Marketing Manager, Namibia <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/Sharma.png" alt="" width = 171px height = 171px>
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/sharma') }}">Sharma Domun</a></h4>
                                <a href="{{ url('/sharma') }}" class="more-btn">Field Sales Manager, B2C LPG, LPG, Mauritius <i class="ti-plus"></i></a>
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