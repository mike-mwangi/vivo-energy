@extends('layouts.master')
@section('content')
<section class="project-area  section-padding30">
           <div class="container">
              <div class="project-heading mb-35">
                   <div class="row align-items-end">
                       <div class="col-lg-6">
                           <!-- Section Tittle -->
                           <div class="section-tittle section-tittle3">
                               <div class="front-text">
                                   <h2 class="">Media Center</h2>
                               </div>
                               <span class="back-text">Gellary</span>
                           </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="properties__button">
                               <!--Nav Button  -->                                           
                               <nav>
                                   <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                       <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Show  all </a>
                                       <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Intorior</a>
                                       <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Recent</a>
                                       <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Big building</a>
                                       <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Park</a>
                                   </div>
                               </nav>
                               <!--End Nav Button  -->
                           </div>
                       </div>
                   </div>
              </div>
               <div class="row">
                   <div class="col-12">
                       <!-- Nav Card -->
                       <div class="tab-content active" id="nav-tabContent">
                           <!-- card ONE -->
                           <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">          
                               <div class="project-caption">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-6">
                                           <div class="single-project mb-30">
                                               <div class="project-img">
                                                   <img src="assets/img/media/press.jpg" alt="">
                                               </div>
                                               <div class="project-cap">
                                                   
                                                   <h4><a href="{{route('media.press')}}">PRESS RELEASES</a></h4>
                                                   <h4><a href="{{route('media.press')}}">
                                                       <p>Vivo Energy Uganda, the company that distributes and markets Shell-branded fuels and lubricants in Uganda, together with National Environment Management Authority (NEMA), Uganda Breweries Limited....</p>
                                                   </a></h4>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-6">
                                           <div class="single-project mb-30">
                                               <div class="project-img">
                                                   <img src="assets/img/gallery/project2.png" alt="">
                                               </div>
                                               <div class="project-cap">
                                                  <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">SOCIAL MEDIA</a></h4>
                                                   <h4><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj0sOn0hcvxAhVBQBoKHahOAXMQFjAAegQIBhAD&url=https%3A%2F%2Fwww.facebook.com%2F&usg=AOvVaw2q27ov2cpCynr72DmuSqEz"><img src="assets/img/media/facebook.png">Facebook</a></h4>
                                                   <h4><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjFv-qehsvxAhURzYUKHdngBA0QFjAAegQIBRAD&url=https%3A%2F%2Fwww.instagram.com%2F&usg=AOvVaw1cBeRoOpMhZ3-x5M1sA3Fm"><img src="assets/img/media/instagram.png">instagram</a></h4>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-6">
                                           <div class="single-project mb-30">
                                               <div class="project-img">
                                                   <img src="assets/img/gallery/project3.png" alt="">
                                               </div>
                                               <div class="project-cap">
                                                  <a href="{{route('media.gallery')}}" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="{{route('media.gallery')}}">IMAGE GALLERY</a></h4>
                                               </div>
                                           </div>
                                       </div>
                                      
                   <!-- End Nav Card -->
                   </div>
               </div>
           </div>           
</section>
 
@endsection
