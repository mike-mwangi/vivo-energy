
@extends('layouts.master')

@section('content')
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/hope/loder-velogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
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
                                        <li>Language</li>
                                        <li>FRANCAIS</li>
                                        <li>ENGLISH</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="https://twitter.com/vivoenergy?lang=en"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/vivoenergy/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/vivoenergy"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="https://www.instagram.com/vivoenergygroup/?hl=en"><i class="fab fa-instagram"></i></a></li>
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
                                    <a href="index.html" class="big-logo"><img src="assets/img/hope/velogo.png" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="index.html" class="small-logo"><img src="assets/img/hope/velogo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="home.blade.php">Home</a></li>
                                            <li><a href="about.blade.php">About</a>
                                            
                                            
                                                <ul class="submenu">
                                                    <li><a href="history.blade.php">Our History</a></li>
                                                    <li><a href="glance.blade.php">At a Glance</a></li>
                                                    <li><a href="principles.blade.php">Our Principles</a></li>
                                                    <li><a href="vision.blade.php">Our Vision</a></li>
                                                </ul></li>
                                            <li><a href="services.html">Products/Services</a></li>
                                            <li><a href="hsse.html">HSSE</a>
                                            <ul class="submenu">
                                                <li><a href="">HSSE Performance</a></li>
                                                <li><a href="">Our HSSE Commitment</a></li>
                                                <li><a href="">Our policy</a></li>
                                            </ul></li>
                                            <li><a href="careers.html">Careers</a>
                                                <ul class="submenu">
                                                    <li><a href="">Why Vivo Energy?</a></li>
                                                    <li><a href="">What to Expect?</a></li>
                                                    <li><a href="">Who Succeeds?</a></li>
                                                    <li><a href="">Our People</a></li>
                                                    <li><a href="">Roles</a></li>
                                                    <li><a href="">Who Succeeds</a></li>
                                                </ul>
                            
                                            <li><a href="community.html">Community</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="project_details.html">Projects Details</a></li>
                                                <li><a href="services_details.html">Services Details</a></li>
                                            </ul></li>
                                            <li><a href="media.html">Media Centre</a>
                                                <ul class="submenu">
                                                    <li><a href="">Press Releases</a></li>
                                                    <li><a href="">Social Media</a></li>
                                                    <li><a href="">Image Gallery</a></li>
                                                    <li><a href="">Media Contacts</a></li>
                                                </ul></li>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="contact.html" class="btn">Contact Us</a>
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
       </div><br><br><br><br><br><br><br><br><br>
        <!-- Header End -->
    </header>
    <main>
       
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Our</h2>
                            </div>
                            <span class="back-text">Vision</span>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>Vivo Energy’s vision is ‘To become the most respected energy business in Africa’. For us, this means doing business the right way and putting Health, Safety Security and Environment first.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>December</span>
                                            <p>2011</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
              <!-- About Area Start -->
              <section class="support-company-area fix pt-10 section-padding30">
                <div class="support-wrapper align-items-end">
                    <div class="left-content">
                        <!-- section tittle -->
                        <div class="section-tittle section-tittle2 mb-55">
                            <div class="front-text">
                                <h2 class="">Doing Business The Right Way</h2>
                            </div>
                            <span class="back-text">About us</span>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">At Vivo Energy, we don’t set ourselves demanding ethical standards out of a sense of altruism or because we lack ambition. We do the right thing because 
                                it’s the best way to succeed and grow the business. The standards we apply and adhere to 
                                across Africa are the same high standards that apply in the world’s most tightly regulated 
                                downstream markets. We have zero tolerance for corruption, unsafe practices, environmental 
                                neglect or unfair competition.</p>

                        </div>
                    </div>
                    <div class="right-content">
                        <!-- img -->
                        <div class="right-img">
                            <img src="assets/img/hope/vision.png" alt="">
                        </div>
                        <div class="support-img-cap text-center">
                            <span>2011</span>
                            <p>Since</p>
                        </div>
                    </div>
                                <h2 class="">Health, Safety, Security and Environment (HSSE) first </h2> 
                                <p class="pera-top"><ol>For us this means:

<li>Goal Zero: putting safety first.</li>
<li>Investing in the future – for the business and the communities and countries in which we operate.</li>
<li>Delivering value to our employees: empower, recognise and reward.</li>
<li>Caring for the environment, communities and people. Clear vision and swift decision-making.</li></ol>
We want our employees, customers and suppliers to be eager to work with us; we want to be a partner<br>
 of choice for governments in terms of regulating and developing the industry; we want people to <br>
 say ‘Vivo Energy is a great company’. When a person says ‘I work at Vivo Energy’, it must <br>
 resonate. In short, over time, we want to be recognised as Africa’s most respected energy business.<br>
                          ---- Christian Chammas, CEO Vivo Energy
                            </p>
                </div>
            </section>
            <!-- About Area End --> 
    </main>
   <footer>
       <!-- Footer Start-->
       <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/hope/loder-velogo.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="#">Loation</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">HSSE</a></li>
                                        <li><a href="#">Community</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    
                                    <ul>
                                        <ul>
                                            <li><a href="#">Investors</a></li>
                                            <li><a href="#">Media Centre</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Legal Disclaimer</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="phone" name="EMAIL" id="newsletter-form-email" placeholder=" Phone Number " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Phone Number '">
                                           <br> <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                           <br>  <input type="text" name="EMAIL" id="newsletter-form-email" placeholder=" Write a Message " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Message '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    SUBMIT
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Map -->
                                <div class="map-footer">
                                    <img src="assets/img/gallery/map-footer.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
      </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>
@endsection
