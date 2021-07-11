<header>
   <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
               <div class="container-fluid">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>+254712345678</li>
                                    <li>info@domain.com</li>
                                    <li>Mon - Sat 8:00 - 17:00, Sunday - CLOSED</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="https://twitter.com/vivoenergy"target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/vivoenergy/"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/vivoenergy/"target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                   <li> <a href="https://www.instagram.com/vivoenergygroup/"target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <!-- logo-1 -->
                                <a href="{{ url('/') }}" class="big-logo"><img src="assets/img/logo/velogo.png"style="height:100px" width="205px" alt=""></a>
                                
                                <!-- logo-2 -->
                                <a href="{{ url('/') }}" class="small-logo"><img src="assets/img/logo/loder-velogo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about') }}">About</a></li>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="#">Community</a></li>
                                        <li><a href="#">HSSE</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Media Center</a></li>
                                        <!-- <li><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="project_details.html">Projects Details</a></li>
                                                <li><a href="services_details.html">Services Details</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href={{ route('contact.store') }}  class="btn">Contact Now</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>