<!doctype html>

@extends('layouts.master')

@section('content')

  <!-- slider Area Start-->
  <div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset("assets/img/hero/about.jpg") }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h2>Single Blog</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Single Blog</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 posts-list">
           <div class="single-post">
              <div class="feature-img">
                 <img class="img-fluid" src="{{ blogImage($blog->blog_image) }}" alt="">
              </div>
              <div class="blog_details">
                 <h2>{{$blog->blog_topic}}
                 </h2>
                 <ul class="blog-info-link mt-3 mb-4">
                    <li><a href="#"><i class="fa fa-user"></i> {{$blog->blog_tags}}</a></li>
                 </ul>
                 <p class="excert">
                    {{$blog->blog_body}}
                 </p>

              </div>
           </div>

           <div class="comment-form">
              <h4>Leave a Reply</h4>
              <form class="form-contact comment_form" action="#" id="commentForm">
                 <div class="row">
                    <div class="col-12">
                       <div class="form-group">
                          <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                             placeholder="Write Comment"></textarea>
                       </div>
                    </div>
                    <div class="col-sm-6">
                       <div class="form-group">
                          <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                       </div>
                    </div>
                    <div class="col-sm-6">
                       <div class="form-group">
                          <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                       </div>
                    </div>
                    <div class="col-12">
                       <div class="form-group">
                          <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                       </div>
                    </div>
                 </div>
                 <div class="form-group">
                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                 </div>
              </form>
           </div>
        </div>
        <div class="col-lg-4">
           <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget search_widget">
                 <form action="#">
                    <div class="form-group">
                       <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder='Search Keyword'
                             onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                          <div class="input-group-append">
                             <button class="btns" type="button"><i class="ti-search"></i></button>
                          </div>
                       </div>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                       type="submit">Search</button>
                 </form>
              </aside>
              <aside class="single_sidebar_widget post_category_widget">
                 <h4 class="widget_title">Category</h4>
                 <ul class="list cat-list">
                    <li>
                       <a href="#" class="d-flex">
                          <p>Fuels</p>
                       </a>
                    </li>
                    <li>
                       <a href="#" class="d-flex">
                          <p>Aviation</p>
                       </a>
                    </li>
                    <li>
                       <a href="#" class="d-flex">
                          <p>Lubricants</p>
                       </a>
                    </li>
                    <li>
                       <a href="#" class="d-flex">
                          <p>Mining</p>
                       </a>
                    </li>
                    <li>
                       <a href="#" class="d-flex">
                          <p>Marine</p>
                       </a>
                    </li>
                 </ul>
              </aside>

              <aside class="single_sidebar_widget newsletter_widget">
                 <h4 class="widget_title">Newsletter</h4>
                 <form action="#">
                    <div class="form-group">
                       <input type="email" class="form-control" onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                       type="submit">Subscribe</button>
                 </form>
              </aside>
           </div>
        </div>
     </div>
  </div>
</section>
<!--================ Blog Area end =================-->

@endsection