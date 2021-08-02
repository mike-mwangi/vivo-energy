@extends('layouts.master')

@section('content')
<div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-cap hero-cap2 pt-120">
                                <h2>Why Vivo Energy?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Details Start -->
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="assets/img/gallery/why_vivo_others2.png" alt="" width = 690px height = 321px>
                            </div>
                            <div class="details-caption">
                                <p>We operate under the Shell and Engen brands – the most recognised brands in Africa. <a href = "">Our company vision – to create Africa’s most respected energy business</a> - is being achieved through:</p>
                                <p>
                                    <ul>
                                    <li>- The high quality of <a href = "{{ url('/products') }}">Shell and Engen products</a>.
                                    <li>- An emphasis on local accountability in the countries where we operate.
                                    <li>- The highest <a href = "">HSSE standards</a>.
                                    <li>- Our demonstrated commitment to our core values - Honesty, Integrity and Respect for People. 
                                    </ul>
                                </p>
                                <p>We do things differently at Vivo Energy. Not for the sake of being different but because our performance-driven operating culture drives us to focus on the core issues and to simplify processes and procedures wherever possible. It's a philosophy that determines our way of working and underpins everything we say and do. It places demands on all of us at Vivo Energy. It creates expectations with our customers and business partners. It generates opportunities for anyone with the drive and initiative to make the most of them.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->

@endsection